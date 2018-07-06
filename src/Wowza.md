# Wowza

**namespace** Com\Wowza

## Usage

* **new** Wowza(Settings $settings)

    * **[Settings](Entities/Application/Helpers/Settings.md)** object is required when Creating a new Wowza object with which to talk to the Wowza Streaming Engine (WSE) REST API.

* **Wowza->getHost()**

    * Gets the hostname or IP address of the machine on which WSE is running. NOTE: this is a wrapper for the same method of the Settings helper class.

* **Wowza->getServerInstance()**

    * Gets the WSE server instance to which the API is connected. NOTE: this is a wrapper for the same method of the Settings helper class.

* **Wowza->getVHostInstance()**

    * Gets the WSE VHost instance to which the API is connected. NOTE: this is a wrapper for the same method of the Settings helper class.

* **Wowza->sendRequest()**

* $props,
* $entities,
* $verbType = self::VERB_POST,
* $queryParams = null

        if (isset($props->restURI) && !empty($props->restURI)) {
            $entityCount = count($entities);
            if ($entityCount > 0) {
                for ($i = 0; $i < $entityCount; $i++) {
                    $entity = $entities[$i];
                    if (is_object($entity) && method_exists($entity, 'getEntityName')) {
                        $name = $entity->getEntityName();
                        $props->$name = $entity;
                    }
                }
            }
            $json = json_encode($props);

            $restURL = $props->restURI;
            if (null !== $queryParams) {
                $restURL .= '?' . $queryParams;
            }
            $this->debug("JSON REQUEST to {$restURL} with verb {$verbType}: " . $json);

            $ch = curl_init($restURL);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $verbType);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

            if ($this->settings->isUseDigest()) {
                curl_setopt($ch, CURLOPT_USERPWD,
                    $this->settings->getUsername() . ':' . $this->settings->getPassword());
                curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
            }

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Accept:application/json; charset=utf-8',
                'Content-type:application/json; charset=utf-8',
                'Content-Length: ' . strlen($json),
            ]);
            $contents = curl_exec($ch);
            curl_close($ch);

            $this->debug('RETURN: ' . $contents);

            return json_decode($contents);
        }

        return false;
    }


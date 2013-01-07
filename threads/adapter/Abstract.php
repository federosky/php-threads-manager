<?php
/**
 *
 */
require_once 'Interface.php';
/**
 *
 */
abstract class AdapterAbstract implements AdapterInterface
{
    /**
     * (non-PHPdoc)
     * @see AdapterInterface::getThreadResponse()
     */
    public function getThreadResponse($thread)
    {
        $response = '';
        if (($response = fread($thread, 64)) !== '' || feof($thread)) {
            // Get the output/response of the process
            while (!feof($thread)) {
                $response .= fread($thread, 1024);
            }
            return $response;
        }
        return false;
    }
}
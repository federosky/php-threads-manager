<?php
/**
 * Process Adapter Interface
 */
interface AdapterInterface
{
    /**
     *
     * @param unknown_type $params
     * @param unknown_type $options
     */
    public function prepareThreadCommand($params, $options);

    /**
     *
     * @param unknown_type $command
     * @param array $options
     */
    public function startThread($command, array $options = null);

    /**
     *
     * @param unknown_type $thread
     */
    public function getThreadResponse($thread);

    /**
     *
     * @param unknown_type $thread
     */
    public function closeThread($thread);
}
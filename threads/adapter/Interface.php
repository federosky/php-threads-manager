<?php
/**
 *
 * @author fscarabino
 *
 */
interface AdapterInterface
{
    public function prepareThreadCommand($params, $options);

    public function startThread($command, array $options = null);

    public function getThreadResponse($thread);

    public function closeThread($thread);
}
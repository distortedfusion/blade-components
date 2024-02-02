<?php

namespace DistortedFusion\BladeComponents\Concerns;

trait FormatsSize
{
    /**
     * Formats bytes to a human readable format.
     *
     * @param string $bytes
     *
     * @return string
     */
    public static function formatBytes(int $bytes): string
    {
        $si_prefix = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $class = min((int) log($bytes, 1024), count($si_prefix) - 1);

        return sprintf('%1.2f', $bytes / pow(1024, $class)).' '.$si_prefix[$class];
    }
}

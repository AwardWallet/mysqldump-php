<?php

namespace Ifsnop\Mysqldump;

interface CompressorInterface {

    public function open($filename);

    /**
     * @return int
     */
    public function write($str);
    public function close();

}
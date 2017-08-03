<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:45
 */

namespace App;

/**
 * Interface ProtocolAwareInterface
 * @package App
 */
interface ProtocolAwareInterface
{

    /**
     * @param $api
     * @return mixed
     */
    public function getApiRequest($api);
}

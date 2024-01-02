<?php

namespace App\Models;

use CodeIgniter\Model;


class VisitorModel extends Model
{
    protected $table         = 'tb_visitor';
    protected $returnType    = 'array';
    protected $allowedFields = [
        'ip_address',
        'short_link_id',
        'user_agent',
        'platform',
        'is_browser',
        'browser',
        'is_mobile',
        'mobile',
        'is_robot',
        'robot',
        'is_referral',
        'referral',
        'version',
    ];

    public function updateVisitor($request,$link = null)
    {
    
        $agent = $request->getUserAgent();
        $ip_address = $request->getIPAddress();

        $dataVisitor = [
            'short_link_id'   => !empty($link) ? $link : base_url(),
            'ip_address'      => $ip_address,
            'user_agent'      => $agent->getAgentString(),
            'platform'        => $agent->getPlatform(),
            'is_browser'      => $agent->isBrowser(),
            'browser'         => $agent->getBrowser(),
            'is_mobile'       => $agent->isMobile(),
            'mobile'          => $agent->getMobile(),
            'is_robot'        => $agent->isRobot(),
            'robot'           => $agent->getRobot (),
            'is_referral'     => $agent->isReferral(),
            'referral'        => $agent->getReferrer(),
            'version'         => $agent->getVersion(),
        ];
        $save = $this->insert($dataVisitor);
        return $save;
    }
}
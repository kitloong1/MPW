<?php

if (isset($_REQUEST['service'])) {
    $service = $_REQUEST['service'];


    switch ($service) {
        case 'f2f':
            $process = [
                'Hotel/Venue Selection' => 'Rate and availability studies to secure the best possible location for your meeting.',
                'Meeting Objectives' => 'Evaluate and prioritize meeting objectives to maximize both site attendance and budget.'
            ];
            break;
        case 'virtual':
            $process = [
                'Benefits to Sponsor/CRO' => 'MPW management of platform to ensure you stay focused on message delivery',
                'Benefits to Sites' => 'Easy. No apps or software to download',
                'Platform Highlights' => '',
                'Hybrid Meetings' => ''
            ];
            break;
        case 'onDemand':
            $process = [
                'What is Atlas' => 'MPW’s secure, online, on-demand learning management system',
                'Way to use Atlas' => 'Host on-demand trainings before and/or after face-to-face or virtual meetings to maximize time',
                'Why use Atlas' => 'Create efficiency for site start up'
            ];
            break;
        case 'patient':
            $process = [
                'Site Personnel' => 'Lessen administrative burdens allowing sites to focus on patient care and clinical research.',
                'Patients & Caregivers' => 'Reduce the stress of travel, cost, and other barriers related to clinical trial participation by arranging all aspects of travel.',
                'Sponsors & CROs' => 'Mitigate difficulties to patient participation and increase patient retention.'
            ];
            break;

    }


    echo json_encode($process);
}
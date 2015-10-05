<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 09/09/15
 * Time: 18.13
 */

namespace Priz\User\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /* PERSONAL INFORMATIONS

    protected $weight;

    protected $sport;

    protected $dateOfBirth;

    protected $picture;

    /* SETTINGS

    protected $accountType;

    protected $unitPreference; //metric or English

    protected $language;

    protected $dateFormat; // DD/MM/YY MM/DD/YY

    /* COACHES */
    //ARRAY DI COACHES

    /* CALENDAR

    protected $calendarSync; //webcal://www.trainingpeaks.com/ical/HSJAELCYVOH6U.ics This URL provides a link so you can subscribe to your TrainingPeaks calendar via a 3rd party calendar application, such as Google Calendar, Microsoft Outlook, Apple's iCal.

    /* EMAIL OPTIONS
    protected $isPlannedWorkoutDailyMail;

    protected $deliveryTime;

    protected $isNewsletterSubscriber;


    /* ******* ZONES ********* */

    /* DEFAULT HEART RATE */
    //Threshold Heart Rate
    //Max Heart Rate

    //Resting Heart Rate

    //Zone 1: Recovery //FROM //TO
    //Zone 2: Aerobic
    //Zone 3: Tempo
    //Zone 4: SubThreshold
    //Zone 5A: SuperThreshold
    //Zone 5B: Aerobic Capacity
    //Zone 5C: Anaerobic Capacity

    /* POWER */
    //Threshold


}
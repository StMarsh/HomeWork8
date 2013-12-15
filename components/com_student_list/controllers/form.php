<?php
/**
 * @version     1.0.0
 * @package     com_student_list
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      StMarsh <milano_@mail.ru> - http://vk.com/id5666638
 */

// No direct access.
defined('_JEXEC') or die;

jimport( 'joomla.application.component.controllerform' );

/**
 * Lists list controller class.
 */
class Student_listControllerForm extends JControllerForm
{

    function __construct($config = array())
    {
        $this->view_list = 'Form';
        parent::__construct($config);
    }

    public function allowSave() {
        return true;
    }
}
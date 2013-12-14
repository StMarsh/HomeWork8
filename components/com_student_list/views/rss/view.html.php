<?php
/**
 * @version     1.0.0
 * @package     com_student_list
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      StMarsh <milano_@mail.ru> - http://vk.com/id5666638
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class Student_listViewRss extends JView {


    /**
     * Display the view
     */
    //function display($tpl = null)
    function display($cachable = false, $urlparams = false)
    {
        $model = &$this->getModel();
        $detail = $model->getrecords();

    }
}

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

/**
 * View to edit
 */
class Student_listViewForm extends JView {


    protected $item;
    protected $form;

    /**
     * Display the view
     */
    public function display($tpl = null) {

        $this->item = $this->get('Item');
        $this->form	= $this->get('Form');
        $this->loadHelper('student_list');
        student_listHelper::setDocument('view title', $this->baseurl);

        parent::display($tpl);
    }


}

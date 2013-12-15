<?php

/**
 * @version     1.0.0
 * @package     com_student_list
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      StMarsh <milano_@mail.ru> - http://vk.com/id5666638
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.modelform');

/**
 * Student_list model.
 */
class Student_listModelForm extends JModelForm
{

    private $input;

    public function __construct($config = array())
    {
        parent::__construct($config);
        $this->input = JFactory::getApplication()->input;
    }

    public function getForm($data = array(), $loadData = true)
    {
        // Get the form.
        $form = $this->loadForm('', 'form', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) {
            return false;
        }

        return $form;
    }

    public function  getTable($type = 'table1', $prefix = 'Table', $config = array()) {
        return JTable::getInstance($type, $prefix, $config);
    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return	array	The default data is an empty array.
     * @since	1.6
     */
    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState('com_student_list.edit.form.data', array());

        if (empty($data)) {
            $data = $this->getItem();

        }

        return $data;
    }

    /**
     * Method to get a single record.
     *
     * @param	integer	The id of the primary key.
     *
     * @return	mixed	Object on success, false on failure.
     * @since	1.6
     */
    public function save($data)
    {
        return parent::save($data);
    }


}
?>
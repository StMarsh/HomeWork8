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
jimport('joomla.event.dispatcher');

/**
 * Student_list model.
 */
class Student_listModelForm extends JModelForm
{

    /**
     * Method to get the form.
     *
     * The base form is loaded from XML and then an event is fired
     * for users plugins to extend the form with extra fields.
     *
     * @param	array	$data		An optional array of data for the form to interogate.
     * @param	boolean	$loadData	True if the form is to load its own data (default case), false if not.
     * @return	JForm	A JForm object on success, false on failure
     * @since	1.6
     */
    public function getForm($data = array(), $loadData = true)
    {
        // Get the form.
        $form = $this->loadForm('com_student_list.form', 'form', array('load_data' => $loadData));
        if (empty($form)) {
            return false;
        }

        return $form;
    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return	array	The default data is an empty array.
     * @since	1.6
     */
    protected function loadFormData()
    {
        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_student_list.edit.table1.data', array());

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
    public function getItem($pk = null)
    {
        if ($item = parent::getItem($pk)) {

            //Do any procesing on fields here if needed

        }

        return $item;
    }

    /**
     * Method to auto-populate the model state.
     *
     * Note. Calling getState in this method will result in recursion.
     *
     * @since	1.6
     */
    protected function populateState()
    {
        // Get the application object.
        $params	= JFactory::getApplication()->getParams('com_student_list');

        // Load the parameters.
        $this->setState('params', $params);
    }

    /**
     * Method to allow derived classes to preprocess the form.
     *
     * @param	object	A form object.
     * @param	mixed	The data expected for the form.
     * @param	string	The name of the plugin group to import (defaults to "content").
     * @throws	Exception if there is an error in the form event.
     * @since	1.6
     */
    protected function preprocessForm(JForm $form, $data)
    {

        // Get the dispatcher.
        $dispatcher	= JDispatcher::getInstance();

        // Trigger the form preparation event.
        $results = $dispatcher->trigger('onContentPrepareForm', array($form, $data));

        // Check for errors encountered while preparing the form.
        if (count($results) && in_array(false, $results, true)) {
            // Get the last error.
            $error = $dispatcher->getError();

            // Convert to a JException if necessary.
            if (!($error instanceof Exception)) {
                throw new Exception($error);
            }
        }
    }

}
?>
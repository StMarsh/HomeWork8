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

//    public function allowSave() {
//        return true;
//    }
//    public function save( $key = null, $urlVar = null )
//    {
//        //Получаем наше приложение
//        $app = JFactory::getApplication();
//        //Данные коотрые пришли из формы
//        $data = $this->input->post->get( 'jform', array(), 'array' );
//        //Получаем нашу модель
//        $model = $this->getModel();
//        //получаем нашу форму
//        $form = $model->getForm( $data, false );
//        //Проводим валидацию данных формы
//        $validData = $model->validate( $form, $data );
//        //Идентификатор записи
//        $recordId = $this->input->getInt( $urlVar );
//        //Контекст
//        $context = "$this->option.edit.$this->context";
//        //объект сессии
//        $session = JFactory::getSession();
//        //проверяем или данные из сессии совпадают с тем что прошло из формы
//        if ( (int)$session->get( 'mycaptcha' ) != (int)$data['mycaptcha'] ) {
//            //Устанавливаем данные для формы
//            $app->setUserState( $context . '.data', $validData );
//            //Создаем ошибку о неверно заполненном поле с суммой цифр
//            $this->setError( JText::sprintf( 'Вы неверно ввели сумму цифр', $this->getModel()->getError() ) );
//            //Устанавливаем сообщение для системы
//            $this->setMessage( $this->getError(), 'error' );
//            //Редиректим обратно на форму с отображением ошибок
//            $this->setRedirect(
//                JRoute::_(
//                    'index.php?option=' . $this->option . '&view=' . $this->view_item
//                    . $this->getRedirectToItemAppend( $recordId, $urlVar ), false
//                )
//            );
//
//            return false;
//        }
//        return parent::save( $key, $urlVar );
//    }
}
<?php

/**
 * @version     1.0.0
 * @package     com_student_list
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      StMarsh <milano_@mail.ru> - http://vk.com/id5666638
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class Student_listModelRss extends JModel {

    function getrecords(){
        $db = JFactory::getDbo();
        $query = "SELECT name_lastname, id, photo, information  FROM #__student_list_table1";
        if(!$db->setQuery($query)) {
            JError::raiseError('500',$db->getErrorMsg());
        }
        $db->setQuery($query);
        $db_value = $db->loadObjectList();

        $this->showxml($db_value);
        //return $db_value;
    }
    function showxml($db_value){
        ob_clean();
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Fr, 6 Dec 2013 20:00:00 GMT");
        header("content-type: text/xml");
        echo '<?xml version="1.0" encoding="utf-8"?>';
        echo '<rss version="2.0">';
        echo '<channel>';
        echo '<title>Student List</title>';
        echo '<link>localhost/joomla7</link>';
        echo '<description>Test xml site</description>';
        foreach ($db_value as $value) {
            echo '<item>';
            echo '<title>';
            echo '<![CDATA['.$value->name_lastname.']]>';
            echo '</title>';
            echo '<link>http://localhost/joomla7/index.php/component/student_list/'.$value->id.'?view=table1</link>';
            //echo '<image>'.$value->photo.'</image>';
            echo '<description>';
            echo '<![CDATA[<img height="200px" src="/joomla7/'.$value->photo.'">]]>';
            echo '<![CDATA[<p>'.$value->information.'</p>]]>';
            echo '</description>';

            echo '</item>';
        }
        echo '</channel>';
        echo '</rss>';
        exit();
    }

}
?>
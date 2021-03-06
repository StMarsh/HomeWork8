<?php
/**
 * @version     1.0.0
 * @package     com_student_list
 * @copyright   © 2013. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      StMarsh <milano_@mail.ru> - http://vk.com/id5666638
 */
// no direct access
defined('_JEXEC') or die;

?>
<script language="javascript">
    <?php JHTML::_('behavior.formvalidation'); ?>
    //Скрипт на валидацию форм. Заполнено поле или нет.
    function myValidate(f) {
        var returnvalue = true;
        if (document.formvalidator.isValid(f)) {
            f.check.value='<?php echo JUtility::getToken(); ?>';
        } else {
//Выводим('Сообщение что поле заполнено не верно и подсвечиваем поле.');
            returnvalue = false;
        }
        if (returnvalue == true)
            return true;
        else{
            return false;
        }
    }
    window.addEvent('domready', function(){
        document.formvalidator.setHandler('birth', function(value) {
            regex=/^\d{4}-\d{2}-\d{2}$/;
            return regex.test(value);
        });
    });
</script>

<div>
    <h1>Додавання нового студента</h1>
    <form action="<?php echo JRoute::_('index.php?view=Form'); ?>" method="post" class="form-validate">
        <ul>
            <li><?php echo $this->form->getLabel('name_lastname'); ?>
                <?php echo $this->form->getInput('name_lastname'); ?></li>
            <li><?php echo $this->form->getLabel('information'); ?>
                <?php echo $this->form->getInput('information'); ?></li>
            <li><?php echo $this->form->getLabel('birthday'); ?>
                <?php echo $this->form->getInput('birthday'); ?></li>
            <li><?php echo $this->form->getLabel('gender'); ?>
                <?php echo $this->form->getInput('gender'); ?></li>
            <li><?php echo $this->form->getLabel('group'); ?>
                <?php echo $this->form->getInput('group'); ?></li>
            <li><?php echo $this->form->getLabel('gpa'); ?>
                <?php echo $this->form->getInput('gpa'); ?></li>
            <li><?php echo $this->form->getLabel('number_of_academic_records'); ?>
                <?php echo $this->form->getInput('number_of_academic_records'); ?></li>
            <li><?php echo $this->form->getLabel('phone_number'); ?>
                <?php echo $this->form->getInput('phone_number'); ?></li>
            <li><?php echo $this->form->getLabel('email'); ?>
                <?php echo $this->form->getInput('email'); ?></li>
            <li><?php echo $this->form->getLabel('photo'); ?>
                <?php echo $this->form->getInput('photo'); ?></li>
        </ul>

        <input type="hidden" name="task" value="" class="validate"/>
        <input type="submit" value="Отправить" class="validate"/>
        <?php echo JHtml::_('form.token'); ?>
    </form>
    <p>* - необхідно запонити обов'язково</p>
</div>


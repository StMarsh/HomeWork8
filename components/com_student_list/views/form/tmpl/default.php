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

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');


?>

<!-- Styling for making front end forms look OK -->
<!-- This should probably be moved to the template CSS file -->


<div class="table1-edit front-end-edit">
    <form id="form-table1" action="<?php echo JRoute::_('index.php?option=com_student_list&task=table1.save'); ?>" method="post" class="form-validate" enctype="multipart/form-data">
        <ul>
<!--            <li>--><?php //echo $this->form->getLabel('id'); ?>
<!--                --><?php //echo $this->form->getInput('id'); ?><!--</li>-->
<!--            --><?php //$canState = false; ?>
<!--            --><?php //if($this->item->id): ?>
<!--                --><?php //$canState = $canState = JFactory::getUser()->authorise('core.edit.state','com_student_list.table1'); ?>
<!--            --><?php //else: ?>
<!--                --><?php //$canState = JFactory::getUser()->authorise('core.edit.state','com_student_list.table1.'.$this->item->id); ?>
<!--            --><?php //endif; ?><!--				--><?php //if(!$canState): ?>
<!--                <li>--><?php //echo $this->form->getLabel('state'); ?>
<!--                    --><?php
                    $state_string = 'Unpublish';
//                    $state_value = 0;
//                    if($this->item->state == 1):
//                        $state_string = 'Publish';
//                        $state_value = 1;
//                    endif;
//                    echo $state_string; ?><!--</li>-->
<!--                <input type="hidden" name="jform[state]" value="--><?php //echo $state_value; ?><!--" />				--><?php //else: ?><!--					<li>--><?php //echo $this->form->getLabel('state'); ?>
<!--                --><?php //echo $this->form->getInput('state'); ?><!--</li>-->
<!--            --><?php //endif; ?><!--				<li>--><?php //echo $this->form->getLabel('created_by'); ?>
<!--                --><?php //echo $this->form->getInput('created_by'); ?><!--</li>-->
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
            <li><?php echo $this->form->getLabel('photo'); ?>
                <?php echo $this->form->getInput('photo'); ?></li>
            <div class="width-100 fltlft" <?php if (!JFactory::getUser()->authorise('core.admin','student_list')): ?> style="display:none;" <?php endif; ?> >
                <?php echo JHtml::_('sliders.start', 'permissions-sliders-'.$this->item->id, array('useCookie'=>1)); ?>
                <?php echo JHtml::_('sliders.panel', JText::_('ACL Configuration'), 'access-rules'); ?>
                <fieldset class="panelform">
                    <?php echo $this->form->getLabel('rules'); ?>
                    <?php echo $this->form->getInput('rules'); ?>
                </fieldset>
                <?php echo JHtml::_('sliders.end'); ?>
            </div>
            <?php if (!JFactory::getUser()->authorise('core.admin','student_list')): ?>
                <script type="text/javascript">
                    jQuery.noConflict();
                    jQuery('#rules select').each(function(){
                        var option_selected = jQuery(this).find(':selected');
                        var input = document.createElement("input");
                        input.setAttribute("type", "hidden");
                        input.setAttribute("name", jQuery(this).attr('name'));
                        input.setAttribute("value", option_selected.val());
                        console.log(input);
                        document.getElementById("form-table1").appendChild(input);
                        jQuery(this).attr('disabled',true);
                    });
                </script>
            <?php endif; ?>
        </ul>

        <div>
            <button type="submit" class="validate"><span><?php echo JText::_('JSUBMIT'); ?></span></button>
            <?php echo JText::_('or'); ?>
            <a href="<?php echo JRoute::_('index.php?option=com_student_list&task=table1.cancel'); ?>" title="<?php echo JText::_('JCANCEL'); ?>"><?php echo JText::_('JCANCEL'); ?></a>

            <input type="hidden" name="option" value="com_student_list" />
            <input type="hidden" name="task" value="table1form.save" />
            <?php echo JHtml::_('form.token'); ?>
        </div>
    </form>
</div>

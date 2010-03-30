<?php use_helper('I18N', 'JavascriptBase') ?>
<?php use_stylesheet("/vjCommentPlugin/css/form.min.css") ?>
<?php use_stylesheet("/vjCommentPlugin/css/formComment.min.css") ?>
<?php $sf_user->setAttribute('nextComment', $object->getNbComments()+1) ?>
<a name="top"></a>
<div class="form-comment">
  <form action="" method="post">
  <fieldset>
    <legend><?php echo __('Add new comment', array(), 'vjComment') ?></legend>
    <?php include_partial("comment/form", array('form' => $form)) ?>
    <tr>
      <td colspan="2" class="submit">
        <input type="submit" value="<?php echo __('send', array(), 'vjComment') ?>" class="submit" />
      </td>
    </tr>
  </table>
  </fieldset>
  </form>
</div>
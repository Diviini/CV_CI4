<main>
  <div class="container">

    <h1>Contactez-moi</h1>

    <?php echo form_open('Contact/contactMail', 'id="mailForm"'); ?>

    <div class="form">

      <div class="form-group">
        <label for="mail">Votre E-mail</label>
        <?php echo form_input('email', set_value('email'), 'required'); ?>
        <?= validation_show_error('email') ?>
      </div>
      <div class="form-group">
        <label for="mail">Votre Objet</label>
        <?php echo form_input('objet', set_value('objet'), 'required'); ?>
        <?= validation_show_error('objet') ?>
      </div>
      <div class="form-group">
        <label for="contenu">Contenu</label>
        <?php echo form_textarea('contenu', set_value("contenu"), 'rows="10" cols="50"'); ?>
        <?= validation_show_error('contenu'); ?>
      </div>

      <div class="form-group" id="submit-form-group-contact">
        <?php echo form_submit('submit', 'Envoyer'); ?>
        <?php echo form_close(); ?>
      </div>

    </div>
  </div>
</main>
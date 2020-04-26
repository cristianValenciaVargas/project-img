<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th>ID foto</th>
      <th>Título</th>
      <th>Descripción</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($imagenes as $key => $m): ?>
      <tr>
        <td><?= $m->idImagen?></td>
        <td><?= $m->tituloImagen?></td>
        <td><?= $m->descripcionImagen?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $pager->links() ?>
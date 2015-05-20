<?php $this->extend('/Common/index');?>

<?php $this->start('column');?>
    <?php $this->assign('tit_col', 'Filtrar:'); ?>
    <ul>    
        <li><?php 
            $dia = date('Y-m-d');
            echo $this->Html->link('Hoy', array('controller' => 'Turnos', 'action'=>'filtrarDia', $dia));
            ?>
        </li>
        <li><?php 
            $sem = date('W');
            echo $this->Html->link('Semana', array('controller' => 'Turnos', 'action'=>'filtrarSem', $sem));
            ?>
        </li>
        <li>
            <?php
            $mes = date('m');
            echo $this->Html->link('Mes', array('controller' => 'Turnos', 'action'=>'filtrarMes', $mes));
            ?>
        </li>
        <li>
            <?php
            $año = date('Y');
            echo $this->Html->link('Año', array('controller' => 'Turnos', 'action'=>'filtrarAnio', $año));
            ?>
        </li>
        <li><?php echo $this->Html->link('Agregar Turno', array('controller' => 'Turnos', 'action'=>'add', ))?></li>
        
    </ul> 
<?php $this->end(); ?>

<?php $this->assign('title', 'Lista de Turnos'); ?>


<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id_turno', 'ID');?></th>
        <th><?php echo $this->Paginator->sort('fecha_turno', 'Fecha');?></th>
        <th><?php echo $this->Paginator->sort('hora_turno', 'Hora');?></th>
        <th><?php echo $this->Paginator->sort('paciente_id', 'Paciente');?></th>
        <th><?php echo $this->Paginator->sort('observacion_turno', 'Observacion');?></th>
        <th>Acciones</th>
    </tr>
    
    <?php foreach($turnos as $turno): ?>
        <tr>
            <td><?php echo $turno['Turno']['id_turno']; ?></td>
            <td><?php echo $turno['Turno']['fecha_turno']; ?></td>
            <td><?php echo $turno['Turno']['hora_turno']; ?></td>
            <td><?php echo $turno['Turno']['paciente_id']; ?></td>
            <td><?php echo $turno['Turno']['observacion_turno']; ?></td>
            <td>
                <?php echo $this->Html->link('Editar', array('action'=>'edit',$turno['Turno']['id_turno'])); ?>/
                <?php echo $this->Form->postLink('Borrar', array('action'=>'delete',$turno['Turno']['id_turno']), array('confirm' => 'Esta seguro?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset($turno); ?>
</table>

<?php $this->start('paginate'); ?>
<?php  
    // Shows the page numbers
    echo $this->Paginator->numbers(array('first' => 2, 'last' => 2));

    // Shows the next and previous links
    echo $this->Paginator->prev(
    '« Anterior',
    null,
    null,
    array('class' => 'disabled'));
    echo $this->Paginator->next(
    'Siguiente »',
    null,
    null,
    array('class' => 'disabled'));

    // prints X of Y, where X is current page and Y is number of pages
    echo $this->Paginator->counter('{:page} de {:pages}'); 
?>

 <?php $this->end(); ?>
      
      
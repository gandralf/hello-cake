<?php
/**
 * @var View $this
 * @var Array $posts
 */
?>
<h1>Blog posts</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>
    <?php foreach ($posts as $post): ?>
    <?php $link = $this->Html->link($post['Post']['title'],
        array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])) ?>
    <tr>
        <td><?php echo $post['Post']['id'] ?></td>
        <td><?php echo $link ?></td>
        <td><?php echo $post['Post']['created'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
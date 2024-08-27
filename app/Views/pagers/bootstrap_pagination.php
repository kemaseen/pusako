<?php $pager->setSurroundCount(10) ?>
<div class="pagination mt-5 pt-4">
	<ul class="list-inline">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="list-inline-item"><a href="<?= $pager->getFirst() ?>" class="prev-posts"><?= lang('Pager.first') ?></a></li>
            <li class="list-inline-item"><a href="<?= $pager->getPrevious() ?>" class="prev-posts"><?= lang('Pager.previous') ?></a></li>
        <?php endif ?>
        <?php foreach ($pager->links() as $link) : ?>
            <li class="list-inline-item"><a href="<?= $link['uri'] ?>" class="<?= $link['active'] ? 'active"' : '' ?>"><?= $link['title'] ?></a></li>
        <?php endforeach ?>
        <?php if ($pager->hasNext()) : ?>
            <li class="list-inline-item"><a href="<?= $pager->getNext() ?>" class="prev-posts"><?= lang('Pager.next') ?></a></li>
            <li class="list-inline-item"><a href="<?= $pager->getLast() ?>" class="prev-posts"><?= lang('Pager.last') ?></a></li>
        <?php endif ?>
	</ul>
</div>
                
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ye_qt7H' shared service.

return $this->privates['.service_locator.Ye_qt7H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService.php', true],
], [
    'commentRepository' => 'App\\Repository\\CommentRepository',
]);
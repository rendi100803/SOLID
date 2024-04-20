<?php

namespace socialmedia;

require_once '../../lsp/studikasus1/socialMedia.php';
require_once '../../lsp/studikasus1/postMediaManager.php';

class Instagram implements \SocialMedia, \PostMediaManager
{
    public function chat(): void
    {
        echo "Chatting on Instagram...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos on Instagram...\n";
    }

    public function publishPost(): void
    {
        echo "Publishing post on Instagram...\n";
    }
}
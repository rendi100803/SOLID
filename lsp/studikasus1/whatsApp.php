<?php

namespace socialmedia;

require_once '../../lsp/studikasus1/socialMedia.php';
require_once '../../lsp/studikasus1/videoGroupManager.php';

class WhatsApp implements \SocialMedia, \VideoGroupManager
{
    public function chat(): void
    {
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos on WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo "Calling group video on WhatsApp...\n";
    }
}
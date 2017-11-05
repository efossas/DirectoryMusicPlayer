# Directory Music Player

A simple way to turn a directory of mp3 files into an online music player

## Install

Just add index.php & mp3player into the directory with the music.

You can do that quickly by running this command:

`git init; git remote add origin https://github.com/efossas/DirectoryMusicPlayer; git pull origin master`

If you need to change ownership, run:

`chown -R www-data:www-data index.php mp3player/`

## Usage

Just go to the directory url. You can add `?shuffle` to shuffle the music's order.

## Notes

Everything is already minimized. The player is responsive so it should look good on mobile.

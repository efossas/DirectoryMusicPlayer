# Directory Music Player

A simple way to turn a directory of mp3 files into an online music player

## Install

Just add `index.php` & `mp3player` into the directory with the music.

You can do that quickly by running this command in the directory:

```git init; git remote add origin https://github.com/efossas/DirectoryMusicPlayer; git pull origin master```

If you need to change ownership, run:

```chown -R www-data:www-data index.php mp3player/```

## Music

This only works with mp3 files.

If you have ffmpeg, you can use this command to change all m4a in a directory to mp3:

```for f in *.m4a; do ffmpeg -i "$f" -codec:v copy -codec:a libmp3lame -q:a 2 ./"${f%.m4a}.mp3"; done```

## File Names

You don't have to, but the player assumes you are naming your files like: `Artist_Name-Song_Name`

You can use this command to replace spaces with underscores in a directory:

```find -name \"* *\" -type f | rename 's/ /_/g'```

## Usage

Just go to the directory url. You can add `?shuffle` to shuffle the music's order.

## Notes

Everything is already minimized. The player is responsive so it should look good on mobile.

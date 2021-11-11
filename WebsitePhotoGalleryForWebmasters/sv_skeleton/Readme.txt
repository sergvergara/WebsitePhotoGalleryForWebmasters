Website photo gallery for webmasters. By sergvergara
    

- 0) png files in images/*.png and in thumbnail/*.png are examples. Remove all of them before continue with the step 1.

sv_skeleton/
│   
├── images/
│   ├── thumbnail/
│   │     ├── 
│   │     ├── 
│   │     └── 
│   │
│   ├── create
│   ├── rename
│   └── sv_skeleton.pdf
│   
├── simplelightbox-master/
│   ├── ...
│   └── ...
│   
├── index.php
├── Readme.txt
├── style.css
└── childhoodNotebooks.jpg

- 1) copy all your photos or images that will compose the gallery inside folder named images.

- 2) adapt image file names to 00.png, 01.png,..or 00.jpg,01,jpg...Notice the nine first files have to have two digits starting by 0. If you have lots of files and rename all manually is not an option, open linux terminal bash console and after CHECT/ADAPT the script code, execute rename script like ./rename

- 3) in a linux terminal bash console execute ./create script to generate thumbnails in images/thumbnail/ folder, and the pdf composed by all images as file sv_skeleton.pdf. Rename sv_skeleton.pdf to a name which represents your gallery (example_name.pdf)

- 4) open index.php and replace all ocurrences "sv_skeleton" by the name of your gallery you have selected in 3rd previous step (example_name)

- 5) rename base folder name "sv_skeleton" by name you have selected in 3rd previous step (example_name)  

- 6) copy all to a webserver or hosting with PHP server

- 7) test the gallery loading url https://yourdomain.com/example_name/index.php 


example_name/
│   
├── images/
│   ├── thumbnail/
│   │     ├── 00.png
│   │     ├── ...
│   │     └── 10.png
│   │
│   ├── 00.png
│   ├── ...
│   ├── 10.png
│   ├── create
│   ├── rename
│   └── example_name.pdf
│   
├── simplelightbox-master/
│   ├── ...
│   └── ...
│   
├── index.php
├── Readme.txt
├── style.css
└── childhoodNotebooks.jpg



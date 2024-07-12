<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }




            #menubar {

            }
    
           
    
            #xRegular {
                display: none;
            }
    
            #menuBar.active {
                display: none;
            }
    
            #navBar.active {
                display: flex;
            }
    
            #xRegular.active {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header class="relative flex justify-between item-center bg-gradient-to-r px-[20px] lg:px-[70px] py-6 from-[#077105] via-[#077105] to-[#049d04]">
        <a href="../index.html" class="flex -gap-1 items-center -ml-2 lg:-ml-5">
            <img src="../assets/achieverslogo.svg" class="w-[40px] lg:w-20 " alt="">
            <div class="text-[#fff]">
                <h1 class="text-xl lg:text-3xl text-red font-bold ">ACHIEVERS UNIVERSITY</h1>
                <h5 class="text-sm lg:text-md">KM 1, Idasen- Ute Road, Owo, Ondo State</h5>
            </div>
        </a>

        
        <ul id="navBar" class="absolute hidden z-5 left-0 top-[95px] lg:top-[0px]  bg-white lg:bg-transparent p-0 w-[100%] lg:w-fit lg:relative decoration-none text-[#077105] lg:text-[#fff] lg:flex flex-col lg:flex-row items-center lg:gap-12 text-[20px]">
            <li class="hover:tracking-wider w-[100%] lg:w-fit py-3 pl-4 lg:pl-0 border-b-[1px] lg:border-b-0 border-[#077105] hover:border-b lg:border-[#fff]  hover:text-red-600"><a href="./programmes.php" class="">Programmes</a></li>
            <li class="hover:tracking-wider w-[100%] lg:w-fit py-3 pl-4 lg:pl-0 border-b-[1px] lg:border-b-0 border-[#077105] hover:border-b lg:border-[#fff]   hover:text-red-600"><a href="./faqs.html">Faqs</a></li>
            <li class="hover:tracking-wider w-[100%] lg:w-fit py-3 pl-4 lg:pl-0 border-b-[1px] lg:border-b-0 border-[#077105] hover:border-b lg:border-[#fff]   hover:text-red-600"><a href="./apply.html">How to apply</a></li>
        </ul>

        <img src="../assets/bx-menu.png" alt="" onclick="runNav()" id="menuBar" class="w-[40px] lg:hidden">
        <img src="../assets/x-regular-24.png" onclick="cancelNav()" id="xRegular" alt="" class="w-[40px] lg:hidden">
    </header>

    <div class="card_wrapper">

        <?php 
            $json_data = file_get_contents("courses.json");
            $programmes = json_decode($json_data, true);

            if(count($programmes) != 0) {
                foreach($programmes as $programme) {
   
                    for ($i = 0; $i < count($programme["courses"]); $i++) {

                        ?>
                        <div class="card">
                            <div class="card_image">
                                <img src="../assets/<?php echo $programme["courses"][$i]["img"] ?>" alt="">
                            </div>
                
                            <div class="card_body">
                                <h2><?php echo $programme["courses"][$i]["course"] ?></h2>
                
                                <p class="card_text"><?php echo $programme["faculty"] ?></p>
                
                                <p class="card_text_ii ">Session: 2024/2025</p>
                
                                <h5>Closes: 31/08/2024</h5>
                
                                <div class="btn_wrapper">
                                    <a href="https://apply.achievers.edu.ng">Apply Now</a>
                                    <?php
                                    if ($programme["faculty"] == "School Of Postgraduate Studies")
                                    {
                                    ?>
                                    <a href="https://achievers.edu.ng/postgraduate_study/" class="learn_more">Requirements</a>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                        <a href="https://achievers.edu.ng/undergraduate_programmes/" class="learn_more">Requirements</a>
                                    <?php
                                    }
                                    ?>  
                                    
                                    
                                </div>
                            </div>
                        </div>


                        <?php
                    }
                }
            }
        ?>
        
    </div>

    <footer class="flex flex-col gap-3 lg:items-center py-9 bg-[#077105] text-white">
        <div class="px-9 lg:px-0">
            <span class="capitalize text-[12px] lg:text-[20px]">for more information visit <a href="https://www.achievers.edu.ng" class="text-red-600">Achievers website</a> Or call</span> 
        </div>
        <div class="px-9 lg:px-0">
            <span class="capitalize text-[12px] lg:text-[20px]">Adebayo: 08033432195; Alaba: 08037062508; Oluchi: 08039366046; Temidayo: 07030958994</span>
        </div>
    </footer>
    <script src="../scripts/script.js" >
        
    </script>
</body>
</html>
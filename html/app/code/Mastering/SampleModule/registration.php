<?php

#le decimos a MAGENTO la existencia del modulo con ComponentRegistrar::MODULE, el nombre del modulo Mastering_SampleModule,y el directorio del modufo _DIR_ 
\Magento\Framework\Component\ComponentRegistrar::register(\Magento\Framework\Component\ComponentRegistrar::MODULE,'Mastering_SampleModule',__DIR__);
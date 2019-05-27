<?php

// input
fscanf(STDIN,"%s",$S);

// solution
try {
    new ReflectionClass('ReflectionClass' . ((int)$S . "" !== $S));
    echo $S;
} catch (Exception $e) {
    echo "Bad String";
}

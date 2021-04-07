<?php

function showPeople($underaged = true)
{
    $people = array([
        name => "Jan",
        surname => "Kowalski",
        age => 17
    ], [
        name => "Anna",
        surname => "Nowak",
        age => 42
    ], [
        name => "Kasia",
        surname => "Mierzejewska",
        age => 8
    ], [
        name => "Marek",
        surname => "Antoniewski",
        age => 33
    ], [
        name => "Emilia",
        surname => "Beza",
        age => 15
    ], [
        name => "Tomek",
        surname => "Zegarski",
        age => 19
    ], [
        name => "Maria",
        surname => "Dabrowska",
        age => 16
    ]);
    $surnames = array();
    foreach ($people as $person => $data) {
        if ($underaged) {
            array_push($surnames, $data[surname]);
        } else {
            if ($data[age] > 18) {
                array_push($surnames, $data[surname]);
            }
        }
    }
    asort($surnames);
    foreach ($surnames as $key => $surname) {
        foreach ($people as $person => $data) {
            if ($surname == $data[surname]) {
                echo $data[surname] . " " . $data[name] . ", ";
            }
        }
    }

}

showPeople(false);
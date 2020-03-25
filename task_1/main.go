package main

import (
	"fmt"
	"math/rand"
	"time"
)

func main() {

	tries := 3
	maxNum := 10
	source := rand.NewSource(time.Now().UnixNano())
	randomizer := rand.New(source)
	secretNumber := randomizer.Intn(maxNum)

	fmt.Printf("Hello! Welcome to... Guess the number!!!\nYou have %d tries to guess the number right.\n", tries)

	var guess int
	correct := false

	for i := 0; i < tries; i++ {
		fmt.Printf("Please guess a number between 0 and %d\n", maxNum)
		fmt.Scan(&guess)

		if guess == secretNumber {
			correct = true
			break
		} else if guess < secretNumber {
			fmt.Println("Too low! Come on, LIVE a little! :-(")
		} else {
			fmt.Println("Too high! Dial it down a notch ;-)")
		}

	}

	if correct {
		fmt.Printf("Ding! Ding!! Ding!!! And we have a winner!!!\n")
	} else {
		fmt.Printf("Awww... You're all out of tries, better luck next time. :-(\n")
		fmt.Printf("The number is %d\n", secretNumber)
	}

}

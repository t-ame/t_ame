package main

import (
	"fmt"
)

func readNConvert() {

}

func main() {

	fmt.Println("Please enter number to be converted to binary.")

	var binNum int

	s, err := fmt.Scan(&binNum)

	fmt.Printf("You entered %d\n", s)
	if err != nil {
		fmt.Println(err.Error())
	}

}

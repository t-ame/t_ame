package main

import (
	"fmt"
	"strconv"
)

func readNConvert() (string, int) {
	fmt.Println("Please enter a number to be converted to binary.")
	var decNum int
	var binNum string
	s, err := fmt.Scan(&decNum)
	if err == nil {
		fmt.Printf("You entered: %d\n", decNum)
		binNum = strconv.FormatInt(int64(decNum), 2)
	}
	return binNum, s
}

func main() {
	binNum := ""
	for {
		binary, count := readNConvert()
		if count != 0 {
			binNum = binary
			break
		} else {
			fmt.Println("A number is expected.")
		}
	}
	fmt.Printf("Binary equivalent: %s\n", binNum)
}

package main

import (
	"context"
	"fmt"
	"github.com/olivere/elastic"
)

func main() {
	client, err := elastic.NewClient()
	if err != nil {
		fmt.Println("error")
	}

	exists, err := client.IndexExists("twitter").Do(context.Background())
	if err != nil {
		fmt.Println("Handle error")
	}
	if !exists {
		fmt.Println("Index does not exist yet")
	}
}

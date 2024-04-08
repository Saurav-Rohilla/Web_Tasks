const books = [
    { book_ID: 1, title: "The History of Tom Jones, a Foundling", author: "henry fielding", pages: 100, isRead: true },
    { book_ID: 2, title: "Pride and Prejudice", author: "jane austen", pages: 90, isRead: false },
    { book_ID: 3, title: "Riding is Love", author: "Saurav Rohilla", pages: 150, isRead: true },
    { book_ID: 4, title: "Riding is Love", author: "Rahul Deshwal", pages: 130, isRead: false },
    { book_ID: 5, title: "Rap is an Art", author: "Aman Punia", pages: 140, isRead: true },
    { book_ID: 6, title: "Crack NEET", author: "Sagar Rohilla", pages: 200, isRead: false },
    { book_ID: 7, title: "Selfless Love", author: "Neelam Rohilla", pages: 300, isRead: true },
    { book_ID: 8, title: "Journey of a Great Person", author: "Sunil Rohilla", pages: 250, isRead: false },
    { book_ID: 9, title: "Sweet Life", author: "Krishna Devi", pages: 201, isRead: true },
    { book_ID: 10, title: "Greatest Grand-Father", author: "Saurav Rohilla", pages: 231, isRead: false },
    { book_ID: 10, title: "Greatest Grand-Father", author: "Saurav Rohilla", pages: 231, isRead: false }
];



while (1) {
    let choice = prompt(`Please choose one:
1 : For Diplaying Books.
2 : For Searching.
3 : For Calculating total number of pages.
4 : For Calculating read pages.
5 : To Toggle between Read and Unread.
6 : To Sort Books.
7 : To Insert new book.
8 : To Remove a book.
9 : To Exit.
`);
    let searchText;
    let Id;
    let popID;

    function display(item, index, arr) {
        let temp = item.author.split(" ");
        for (let x = 0; x < temp.length; x++) {
            temp[x] = temp[x][0].toUpperCase() + temp[x].substring(1);
        }
        temp = temp.toString();
        temp = temp.replace(/,/g, " ");
        console.log(item.title + "," + temp);
    }

    function searching(item) {
        return item.title == searchText;
    }

    function reducing(total, item) {
        return total + item.pages;
    }

    function reducingRead(total, item) {
        if (item.isRead == true) {
            return total + item.pages;
        }
        else {
            return total;
        }
    }

    function finding(item) {
        return item.book_ID == Id;
    }

    function popping(item,arr)
    {   
        return item.book_ID == popID;
    }

    function showing(arr)
    {
        console.log(arr);
    }

    switch (choice) {
        case "1":
            const displaying = books.map(display);
            break;

        case "2":
            searchText = prompt("Enter the name of the book:");
            let searched = books.filter(searching);
            console.log(searched);
            break;

        case "3":
            const reduced = books.reduce(reducing, 0);
            console.log("Total Pages: " + reduced);
            break;

        case "4":
            const reducedRead = books.reduce(reducingRead, 0);
            console.log("Read Pages: " + reducedRead);
            break;

        case "5":
            Id = prompt("Enter the ID:");
            const found = books.find(finding, Id);
            if (found.isRead == true) {
                found.isRead = false;
            }
            else {
                found.isRead = true;
            }
            console.log(found);
            break;

        case "6":
            const sorted = books.toSorted(function (a, b) { return a.pages - b.pages; });
            // console.log(JSON.stringify(sorted));
            console.log(sorted);
            break;

        case "7":
            let book_ID = prompt("Enter book id:");
            let title = prompt("Enter title:");
            let author = prompt("Enter author");
            let pages = prompt("Enter pages");
            let isRead = prompt("Enter status true(Read) / false(unRead)");
            if (book_ID != null && title != null && author != null && pages != null && status != null) {
                book_ID = Number(book_ID);
                pages = Number(pages);
                isRead = Boolean(isRead);
                // books.splice(books.length-2,0,{ book_ID, title, author, pages, isRead });
                books.push({ book_ID, title, author, pages, isRead });
            }
            books.map(showing);
            break;

        case "8":
            popID = prompt("Enter a book ID : ");
            let popped = books.findIndex(popping);
            console.log("Popped : " + popped);
            if(popped != -1)
            {
                books.splice(popped, 1);
            }
            // for(let x = 0 ; x < popped.length ; x++)
            // {
            //     books.splice(popped,1);
            // }
            books.map(showing);
            break;

        case "9":
            exit();
            break;

        default:
            alert("No choice. Thanks!!!");
    }
}


const { createApp } = Vue;



createApp({
  data() {
    return {
      persons : [
        {
            id: 1,
            name : "Rian",
            age : 25,
            address : "Jakarta",
            point : 70
        },
        {
            id: 2,
            name : "Alisa",
            age : 20,
            address : "Tangerang",
            point : 80
        },
        {  
            id: 3,
            name : "Sinta",
            age : 17,
            address : "Bandung",
            point : 60
        },
        {
            id: 4,
            name : "Joko",
            age : 30,
            address : "Jakarta",
            point : 65
        },
        {
            id: 5,
            name : "Baskara",
            age : 35,
            address : "Tangerang",
            point : 80
        },
        {
            id: 6,
            name : "Ratih",
            age : 27,
            address : "Bandung",
            point : 80
        },
      ],
      number : 1,
      computed: {
        incrementedNumber() {
            return ++this.number
        }
      }
    };
  }
}).mount("#app");

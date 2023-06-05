function getIndex(index) {
    
    axios.post('http://localhost:8888/php-oop-2/components/main.php',{
        index: index
      }).then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });

    // axios.post('http://localhost:8888/php-oop-2/index.php',{
    //     index: index
    //   }).then(function (response) {
    //     console.log(response);
    //   })
    //   .catch(function (error) {
    //     console.log(error);
    //   });
}
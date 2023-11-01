function myAccount(firstName, lastName, avatar){
    this.firstName = firstName,
    this.lastName = lastName,
    this.avatar = avatar
};
var admin = new myAccount('Nguyen','mY','avt1');
var user = new myAccount('Nguyen','ccc','avt');
console.log(admin);
console.log(user);
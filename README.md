# Webhook Trigger Example

Trigger Webhook example

## Getting Started

Setup a Webhook trigger within the triggers page of your account. Triggers make it easy for a custom action / script or form to be filled out to parsed to from each individual visit. 
This is good if Gazella does not provide your specific integration that you are looking for and you would like to transfer and send the data into any other format realtime. 

### Server Requirements
Php 5.6 or newer

### Availiable Parameters / Query Strings

**{name}** - Visitor Name<br />
**{time}** - Visitor Date / Time<br />
**{phone}** - Visitor Phone<br />
**{email}** - Visitor E-mail<br />
**{gender}** - Visitor Gender<br />
**{birthday}** - Visitor Birthday<br />
**{id}** - Visitor Device ID<br />
**{type}** - Visitor Device Type<br />
**{browser}** - Visitor Device Browser<br />
**{os}** - Visitor Device OS<br />
**{custom1}** - Custom Field 1<br />
**{custom2}** - Custom Field 2<br />
**{custom3}** - Custom Field 3<br />
**{check_type}** - Visitor Auth Type. May be one of these: "facebook", "phone", "email", "code"<br />


### Installing

Upload "webhook-trigger-example.php" into your project folder. Example: http://yourcustomsite.com/project/webhook-trigger-example.php.
Once the file is uploaded you may then edit "webhook-trigger-example.php" by replacing the variables with the 'XXXXXXX' values with your email address.

```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the email address that this data will be posted to */
$sendto = 'XXXXXX';  // your@email.com

```

### Configuration

Gazella Webhook Trigger:
> Setup here: https://sys.gazellawifi.com/triggers/


```
//======================================================================//
// CONFIGURATION
//======================================================================//  

/* This is the email address that this data will be posted to */
$sendto = 'your@email.com';  // your@email.com

```

### Testing

Now that you have configured the "webhook-trigger-example.php" php example webhook url will look something like this assuming all parameters are used: 
http://yourcustomsite.com/project/webhook-trigger-example.php?name={name}&time={time}&phone={phone}&birthday={birthday}&type={type}&os={os}&browser={browser}&gender={gender}&email={email}&device_id={id}&custom1={custom1}&custom2={custom2}&custom3={custom3}&check_type={check_type} 

Visit the link - and you should recieve an email with the data filled out.

The values surrounded by a LEFT CURLY BRACKET { and a RIGHT CURLY BRACKET } i.e. **{phone}** are dynamic - and these values will be populated by data provided by the Gazella System from your visitors. For instance if you 
were to have the user visit and input their phone number, this would be programmatically filled with the users phone number. When the script above is triggered, then you will be able to get the users phone number. 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
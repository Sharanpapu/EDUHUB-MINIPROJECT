-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 10, 2021 at 01:01 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eduhub`
--
CREATE DATABASE IF NOT EXISTS `eduhub` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eduhub`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_login_id` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_fax` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_address` text COLLATE latin1_general_ci NOT NULL,
  `address_link` longtext COLLATE latin1_general_ci NOT NULL,
  `hours` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `website` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `designation` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `project` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `built_by` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `google` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `twitter` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `houzz` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `linkedin` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pinterest` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `image_path` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `addaddress` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `addbcc` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `thankyou` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `description` longtext COLLATE latin1_general_ci NOT NULL,
  `secret_key` text COLLATE latin1_general_ci NOT NULL,
  `site_key` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_name`, `admin_login_id`, `admin_password`, `admin_email`, `admin_phone`, `admin_fax`, `admin_address`, `address_link`, `hours`, `website`, `designation`, `project`, `built_by`, `google`, `facebook`, `twitter`, `instagram`, `houzz`, `linkedin`, `youtube`, `pinterest`, `image_path`, `addaddress`, `addbcc`, `subject`, `thankyou`, `description`, `secret_key`, `site_key`) VALUES
(727718, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'info@debdate.com', '(123)456-7890', '', '', '', '', '', 'Administrator', 'Deb Date', 'Web Amenity', 'https://google.com', 'https://www.facebook.com', 'https://twitter.com', 'http://www.instagram.com', 'http://www.houzz.com/', 'http://www.linkedin.com/', 'https://www.youtube.com/', 'https://www.pinterest.com', '', 'raj.sandhu_96@hotmail.co.uk', 'raj.sandhu_96@hotmail.co.uk', 'Contact Details From Deb Date', 'Thank you', '', '6Ldd8B4TAAAAAAJujydeTWFUU5ptoQZopKduucv7', '6Ldd8B4TAAAAAEqMpfvDUbnK90nP6japxZ9eFWzl');

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE `admin_post` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `post_owner` varchar(255) DEFAULT 'admin',
  `post_title` varchar(100) DEFAULT NULL,
  `post_description` mediumtext,
  `author` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `post_image1` varchar(255) DEFAULT NULL,
  `post_video` varchar(255) DEFAULT NULL,
  `post_audio` varchar(255) DEFAULT NULL,
  `post_url` varchar(150) DEFAULT 'sairam.edu.in'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`id`, `post_owner`, `post_title`, `post_description`, `author`, `datetime`, `post_image1`, `post_video`, `post_audio`, `post_url`) VALUES
(1, 'admin', 'Stay Calm and Say SAIRAM!', NULL, NULL, '2020-07-01 01:27:52', 'sairam1.jpg', NULL, NULL, 'sairam.edu.in'),
(2, 'admin', 'Dream, Live, Succeed', NULL, 'Abdul Kalam', '2020-07-04 01:20:58', 'sairam2.jpg', NULL, NULL, 'www.sairamedu.in'),
(3, 'admin', 'Focus On your Goal and Make it Happen', NULL, NULL, '2020-07-02 01:23:54', 'sairam3.jpg', NULL, NULL, 'www.sairamedu.in'),
(4, 'admin', 'Every moment is a fresh beginning', NULL, '', '2020-07-04 01:31:34', 'sairam4.jpg', NULL, NULL, 'sairam.edu.in'),
(5, 'admin', 'Love For All, Hatred For None', NULL, NULL, '2020-07-04 01:30:43', 'sairam5.jpg', NULL, NULL, 'sairam.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'Hi!', '2020-07-12 12:13:03', 0),
(2, 0, 1, '\n    \n       ', '2020-07-12 12:15:40', 1),
(3, 1, 2, 'Hi How are You?\n', '2020-07-12 12:21:21', 0),
(4, 2, 1, 'I am Fine.How are You?', '2020-07-12 12:22:33', 0),
(5, 2, 1, 'I am Fine.How are You?', '2020-07-12 12:22:37', 0),
(6, 2, 1, '😀', '2020-07-12 14:09:36', 1),
(7, 2, 1, '', '2020-07-12 14:09:38', 1),
(8, 0, 1, '    \n          ', '2020-07-12 14:18:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(15, 1, '2020-07-12 10:43:40', 'no'),
(16, 1, '2020-07-12 10:45:38', 'no'),
(17, 1, '2020-07-12 10:46:15', 'no'),
(18, 2, '2020-07-12 11:01:32', 'no'),
(19, 2, '2020-07-12 11:02:21', 'no'),
(20, 1, '2020-07-12 15:58:40', 'no'),
(21, 2, '2020-07-12 12:24:52', 'no'),
(22, 2, '2020-07-12 12:34:45', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` mediumint(100) UNSIGNED NOT NULL,
  `post_owner` mediumtext,
  `post_title` mediumtext,
  `post_description` longtext,
  `author` mediumtext,
  `tag1` mediumtext,
  `tag2` mediumtext,
  `tag3` mediumtext,
  `tag4` mediumtext,
  `tag5` mediumtext,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `post_image1` longtext,
  `post_image2` mediumtext,
  `post_image3` mediumtext,
  `post_image4` mediumtext,
  `post_image5` mediumtext,
  `post_video` mediumtext,
  `post_audio` mediumtext,
  `post_code` mediumtext,
  `post_url` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `post_owner`, `post_title`, `post_description`, `author`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `datetime`, `post_image1`, `post_image2`, `post_image3`, `post_image4`, `post_image5`, `post_video`, `post_audio`, `post_code`, `post_url`) VALUES
(1, 'e8ec088@sairamtap.edu.in', 'Yet another intro to Promise, async - await in JavaScript', 'Heads Up\r\nI am assuming you know basic JavaScript (>= ES6)\r\nThis post is rather semantic than syntactic\r\nI have put up links for further explanations wherever I thought would be necessary.\r\nLet\'s Go\r\nExamples are the best way to make someone understand something because it\'s easier to correlate with something practical than digest theory - Asif Mohammad\r\n\r\nFor example, every time we search for the meaning of a word online we tend to read its examples to make more sense.\r\n\r\nSee what I did there? ?\r\n\r\nSo lets just consider an example of baking and eating some delicious cake. We can break down the whole process into three basic steps\r\n\r\nBaking Cake\r\nServing Cake\r\nEating Cake\r\nThe Javascript equivalent of this process could be portrayed as the following functions\r\nconst bakeCake = () => console.log(\'Cake is baked\');\r\nconst serveCake = () => console.log(\'Cake is served\');\r\nconst eatCake = () => console.log(\'Cake eaten\');\r\nYes, it is neither a proper equivalence nor I am eligible to be a good cook but it serves the purpose if not the cake.?\r\n\r\nOur cake baking journey would go something like\r\nbakeCake(); // Cake is baked\r\nserveCake(); // Cake is served\r\neatCake(); // Cake is eaten\r\nBut most real world scenarios like baking cake and scenarios on the web like fetching user posts, have something in common, they take time\r\n\r\nLets adjust our functions so that they reflect such and lets consider each of our step takes 2 seconds of time\r\nconst bakeCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is baked\')\r\n  }, 2000);\r\n};\r\nconst serveCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is served\')\r\n  }, 2000);\r\n};\r\nconst eatCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is eaten\')\r\n  }, 2000);\r\n};\r\nWe cannot call these three functions sequentially because they will not run synchronously. Why?\r\n\r\nSo we should follow the standard callback pattern which is being used for a long time now.\r\n\r\nUsing Callback Functions\r\nconst bakeCake = (cbkFn) => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is baked\');\r\n    cbkFn();\r\n  }, 2000);\r\n};\r\n\r\nconst serveCake = (cbkFn) => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is served\');\r\n    cbkFn();\r\n  }, 2000);\r\n};\r\n\r\nconst eatCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is eaten\')\r\n  }, 2000);\r\n};\r\n\r\nbakeCake(()=>{\r\n  serveCake(()=>{\r\n    eatCake();\r\n  });\r\n});\r\nUnderstanding the callback pattern\r\nWhen we use callbacks we expect the function we pass to be called back when required (hence the name callback functions). The problem with callbacks is the often occurring Callback Hell.\r\n\r\nConsider our cake baking, when the steps are extended it becomes\r\nbakeCake(() => {\r\n  decorateCake(() => {\r\n    tasteCake(() => {\r\n      cutCake(() => {\r\n        serveCake(() => {\r\n          eatCake(() => {\r\n\r\n          });\r\n        });\r\n      });\r\n    });\r\n  });\r\n});\r\nThis is what we call as the Callback Hell. The more things you are willing to do in this process the more complex and messy it will get. It works, It\'s fine but we always want something batter better.\r\n\r\nPromise\r\nPromise as the name goes is a pattern, rather than being an object/function, where you are promised the execution of a piece of code and it enables you to code further based on your trust on that promise. JS Engine is a machine so you can always trust when it promises you, unlike us evil Humans.\r\n\r\nRewriting our example using promises.\r\nLets skip serving the cake (yes we are the wild ones who eat directly off the stove)\r\nconst bakeCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = () => {\r\n  setTimeout(() => {\r\n    console.log(\'Cake is eaten\');\r\n  }, 2000);\r\n};\r\n\r\nbakeCake().then(eatCake);\r\nWhat we did here is instead of executing the bakeCake function normally, we are enclosing it in a Promised environment. Previously we did not return anything in bakeCake but now we are returning a Promise to the callee.\r\n\r\nA promise that the piece of code enclosed is executed with an assurance that once its completed, either successfully or broke down due to some abnormality, you will be notified.\r\n\r\nresolve being the indicator of success and\r\nreject for any abnormal execution (mostly for an error)\r\n\r\nIn our case of bakeCake we are resolving the promise ( notifying the callee that the piece of code which was promised to be supervised has completed successfully) and on the callee\'s side we can listen to the notification with then and the abnormalities with catch which we haven\'t covered here.\r\n\r\nPromises enable chaining which is not possible by callbacks.\r\nSuppose we had to log our cake baking. We could chain our functions as\r\nconst bakeCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      cakeLog.push(\'Perfectly baked!\')\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst serveCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is served\');\r\n      cakeLog.push(\'Served Well\');\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is eaten\');\r\n      cakeLog.push(\'Ate like its the last cake on earth\')\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nbakeCake([])\r\n  .then(serveCake)\r\n  .then(eatCake)\r\n  .then(console.log);\r\nWe pass in an empty array [] to bakeCake and when it resolves it pushes its own log statement into the array then reaches the first then when resolved and the function you pass as the parameter to then gets the parameter as the content you passed into the resolve call.\r\n\r\nTo understand better. We can rewrite the function calls as\r\nlet cakeLog = [];\r\nbakeCake(cakeLog).then(cakeLog => {\r\n  serveCake(cakeLog).then(cakeLog => {\r\n    eatCake(cakeLog).then(cakeLog => {\r\n      console.log(cakeLog);\r\n    });\r\n  });\r\n});\r\nWe pass cakeLog into bakeCake and we get it back (after getting updated in the cakeLog) as a parameter to the function we pass in to the then call. So we can pass it along to serveCake and repeat the same till we need to consume the accumulated/gross data.\r\n\r\nIt makes more sense when we correlate to a actual scenario like\r\nlet userID = 1001;\r\ngetUser(userID)\r\n    .then((user) => getPosts(user))\r\n    .then((posts) => getTotalLikes(posts))\r\n    .then((likeCount) => console.log(likeCount));\r\nBut We always want better.\r\n\r\nasync - await\r\nasync - await enable us to write asynchronous code just like how we would write synchronous code by acting as a syntactical sugar to the powerful Promise pattern.\r\n\r\nA blueprint of using async await with respect to the underlying Promise pattern would be\r\nasync function(){\r\n  let paramYouSendIntoResolve = await promReturningFn(); \r\n}\r\nCall your asynchronous function but use an await keyword before it\r\nInstead of passing in a function to capture the resolved data. Take it as a return value of the function. Wow\r\nJust one minor discomfort. As you are doing asynchronous stuff amidst of ever synchronous JS flow. Just append async to the function where you use await so that JS Engine knows you are going to do async stuff and interprets accordingly because it has to turn them into Promises later.\r\nBack to our cake baking. (excluded the logging stuff)\r\nconst bakeCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst serveCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is served\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is eaten\'); \r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\n(async ()=>{\r\n  await bakeCake();\r\n  await serveCake();\r\n  await eatCake();\r\n})();\r\nNotice that we have used an IIFE here to force async function execution.\r\n\r\nThere we are!\r\nWe have reached the ability to call asynchronous functions Asif as if they were synchronous.\r\n\r\nThanks for reading. I hope you got something out of this', 'Asif Mohammad', '#javascript', '#web', '#tutorial', NULL, NULL, '2020-07-04 00:29:47', 'thumbs/about-us.jpg', 'thumbs/diagonal_building.jpg', 'thumbs/concert.jpg', NULL, NULL, NULL, NULL, NULL, 'https://dev.to/halfdrownedbiscuit/yet-another-intro-to-promise-async-await-in-javascript-4k4c'),
(2, 'e8ec088@sairamtap.edu.in', 'Break out of your Comfort Zone as an Engineer', 'As an Engineer, being in the same environment for a long time makes it hard to adapt to something new. Break out of your comfort zone and explore new concepts. This will help your personal growth tremendously and elevate your career. Let me explain to you why by sharing my story.\r\n\r\nHow it all started…\r\nBack in 2013, my fascination with Cloud and Automation started when I was developing my research thesis for the Amsterdam University of Applied Sciences. During that time Cloud providers were just starting to come up as a decent alternative to on-premise hosting providers. On-premise data centers consisted of long-lived servers that needed to be patched and upgraded (both software & hardware).\r\n\r\nMaintaining and monitoring these servers used to be a full-time task for an engineer before automation took place. Instead of maintaining these servers, I got inspired to automate and make these environments scalable, self-healing, and immutable by creating and testing Proof of Concepts in Amazon Web Services (AWS).\r\n\r\nThis meant I had to learn more about the DevOps way of thinking and use toolings such as CloudFormation, Git, Python (at that time it was very unusual).\r\n\r\nThe discovery…\r\nI learned from my thesis that the concepts and innovation the Cloud offered gave me the freedom to architect my own infrastructure in such a way to make your infrastructure resilient and highly available. This was such an eye-opener for me because I never would have thought it was possible to create and design your own infrastructure based on your own requirements. AWS supplied the toolbox and gave me the ability to build and create my own infrastructure. Comparing this to on-premise vendors it wasn’t possible to build an infrastructure based on your own requirements because you were bound by the limits and restrictions that they supplied.\r\n\r\nAfter graduating, the company where I researched and completed my thesis hired me as a jr. Unix engineer. Our job was to maintain on-premise servers of clients e.g. patching, monitoring, backup/restore, and deploy updates to applications. After some time I began wondering why we weren’t trying to automate repetitive tasks in our team to improve fault tolerance and speed up clients’ application deployments.\r\n\r\nMy teammates (Unix engineers) were against the idea to automate, reasoning that it took too much effort to implement and test it. The people that said this were smart people that I looked up to, but unfortunately they were very resistant to change! This became a real problem for me because I felt I hit the ceiling of my growth within this organization. Management didn’t feel the necessity to move and adapt to change since their direct competition didn’t innovate.\r\n\r\nAt that point, I began to doubt myself because the engineers I worked with and looked up to had their reasons not to spend the effort to automate and look into the benefits of the Cloud. The same goes for the strategy of the organization, which was more focused on maintaining current workloads on-premise and not spending any efforts on innovation.\r\n\r\nSumming up I had every reason to stay in my comfort zone , this would’ve been the easy road. Naturally, we humans avoid anything uncomfortable. Having experienced the Cloud and its possibilities and innovations made it very hard to persuade myself into continuing my daily comfortable tasks at work. I felt I needed to embrace discomfort to make progress as an engineer and become a better version of myself.\r\n\r\nReflecting on the conversations I had with my former colleagues and managers. I started noticing similarities in their arguments and the underlying reason was uncertainty! They didn’t believe in the Cloud because through conversations I found out most of the colleagues had no experience with it and couldn’t relate to the possibilities it had to offer. One specific feature of AWS that scared our management for example was the “pay-as-you-go” model. Our business was catered to fixed fees and was in a panic to find a way to monetize the model that AWS offered.\r\n\r\nI knew as a Junior Engineer, I wasn’t able to persuade Senior Engineers and management to change their minds. Then it became clear to me that I had to follow my own intuition with the knowledge I acquired and take a risk to look for new opportunities to pursue my new passion.\r\n\r\nI decided to look for change and found a startup company that shared the same interests. We both felt the same way on how AWS was growing at that time and we both felt that eventually, on-premise was going to move to the Cloud because this would enable innovation and growth for businesses.\r\n\r\nThe startup I worked for enabled me to experience multiple migrations, from small businesses to large enterprises. Using the tools provided by AWS, we were able to innovate and improve resiliency and availability with automation.\r\n\r\nLooking back…\r\nIf I look back on it… I’m very glad I picked this path when I was at that enormous crossroad in my career. I could’ve listened to my former colleagues and grow to become a better Unix engineer and stay in my comfort zone. But in the end, I didn’t. I saw the Cloud’s potential by actually trying it out and making my hands dirty.\r\n\r\nThrough this journey, I’ve met lots of great new people whom I learned a lot from. The cool thing about it is that when I got surrounded by likeminded people my motivation and ability to learn improved tremendously!\r\n\r\nWhat have I learned through this journey?\r\nSo what I’ve learned from my journey is – In order to grow, you should get out of your comfort zone, take risks, and be open to change. In the beginning, it was really uncomfortable to start coding as a Unix engineer (I knew basic script skills). Naturally, we humans avoid anything uncomfortable. But the key is to embrace discomfort so you can explore your limits and finally push for more! The results that come out of it will motivate you to challenge yourself even more!\r\n\r\nNext, find a technology that you think will still be there in the upcoming years. Make sure to update yourself on new technologies and decide what you’ll be focusing on. For example, I used to focus a lot on automating operations in the Cloud and establishing high availability for monolithic applications. Over the years I’ve adapted myself to containerize these applications into microservices. With the experience I’ve acquired I see that the trend is moving towards serverless architectures. So now I’m spending my time focusing on serverless and my programming skills.\r\n\r\nAnother learning I want to share is to ignore negative opinions from colleagues or people if they don’t have valid arguments. People might tell you you’ll never reach your goal or that you’ll make a bad decision. Try to find the underlying reason why people react like that. It could be because they have doubts and uncertainties themselves and reflect that back on you.\r\n\r\nAt last, changing your environment every once in a while to get a fresh perspective on things can enforce you to become creative and open to new ideas. This can be done by changing companies or surrounding yourself with different people by swapping teams. Challenging yourself in a fresh environment with different mindsets will help you to open up and experience how powerful it can be to think differently.\r\n\r\nFuture?\r\nI’ve been pushing myself to explore new opportunities, one of them is public speaking. I found out with previous experiences in former companies that I wasn’t visible enough (through feedback). I did my job very well, but I was introverted in a way and didn’t showcase a lot of what I’ve accomplished and built.\r\n\r\nLast year, I started my new job as an AWS Cloud Consultant. This gave me the opportunity to be more at the forefront and engage more with customers on a different level. This felt uncomfortable first, but I decided to take it a step further…\r\n\r\nI noticed that AWS developed the AWS Authorized Instructor (AAI) course. This course allows AWS partners (which our company is part of) or it’s own employees to provide the highest quality training experience to its clients. Since public speaking was something I admired but felt very uncomfortable doing. However, this felt like the perfect opportunity to learn how to give a training course. So I set my goal for this year (2020) to become an instructor. For this, I had to demonstrate a strong technical background and adherence to the standards defined by the AWS Training & Certification Team for teaching and delivering AWS-approved training courses. After completing the assessment of AWS, I became an AWS Authorized Instructor Champion!', 'Danny ???', '#career', '#aws', '#cloud', '#engineer', '#skills', '2020-07-04 00:29:47', 'thumbs/1.jpg', 'thumbs/2.jpg', 'thumbs/3.jpg', 'thumbs/4.jpg', NULL, NULL, NULL, NULL, 'https://dev.to/dsteenman/break-out-of-your-comfort-zone-as-an-engineer-13dl'),
(3, 'e8ec088@sairamtap.edu.in', 'Practical Functional Programming in JavaScript - Side Effects and Purity', 'A function is said to be pure if it has the following properties, Its return value is the same for the same arguments Its evaluation has no side effects (source) Here side effect from stackoverflow A side effect refers simply to the modification of some kind of state - for instance Changing the value of a variable;Writing some data to disk;Enabling or disabling a button in the User Interface', 'Richard Tong', '#python', '#css', '', '', '', '2020-07-03 18:00:57', 'pure.jpg', '', '', '', '', NULL, NULL, '', 'dev.to/richytong/'),
(4, 'e8ec088@sairamtap.edu.in', 'How you can learn Closures in JavaScript and understand when to use them', 'if you are like me, you hear concepts like lexical environments, closure, execution context and you\'re like yep I heard it, can\'t remember what they are but I\'m probably using it. And you know what, you\'d be correct. You are most likely using it but who can remember these terms anyway?\r\n\r\nI mean most likely the only time we need to know what the name of these terms is, is when we need to study up for an interview in JavaScript. I\'m not saying don\'t learn the concepts, I\'m saying as long as you know how they work the world won\'t implode if you call them something else:\r\n\r\nBear claw\r\n\r\nWe know that we need to know these terms at the point of the interview, the rest of the time we just need to know how things work when we code, and we do.\r\n\r\nLet\'s dig deeper, how come we can understand and even apply these terms but not know what they are called? Is it bad naming? Maybe, in my case, it\'s about realizing I\'m a visual learner and I need an image to remember things by, or it doesn\'t stick..\r\n\r\nSo welcome to a crazy ride into my brain - let\'s talk Closures :) - All aboard the crazy train ;)Crazy train\r\n\r\nClosures\r\nWhat are closures? Closures are a function bundled with its lexical environment.\r\n\r\nThank you professor but I barely understood a word\r\n\r\nOk, let\'s look at some code:\r\nfunction outer() {\r\n  // lexical environment\r\n  let a = 1;\r\n  return function inner(b) {\r\n    return a + b\r\n  }\r\n}\r\nWhat you are seeing above is a function outer() enclosing another function inner. It\'s not only enclosing inner() but also the variable a.\r\n\r\nWhat\'s so great about this?\r\n\r\nEven after the function outer() has stopped executing the function inner() will have access to its lexical environment, in this case, the variable a.\r\n\r\nLexical environment, sounds like lexicon, huge and heavy books. Show me.\r\n\r\nOk, imagine we call the code like this:\r\nconst fn = outer();\r\nfn(5) // 6\r\nAbove it remembers a to have value 1.\r\n\r\nOk, so it\'s like it treats a as a private variable, but in a function?\r\n\r\nYea, precisely.\r\n\r\nI have an idea how to remember this :)\r\n\r\nYes?\r\n\r\nCows\r\n\r\nCows?!\r\n\r\nYes Cows in an enclosure with the outer function as the enclosure and the cows as the inner function and the private variable, like this:\r\n\r\nCows in an enclosure\r\n\r\nOook, slooowly stepping away.\r\n\r\nWhat can we use them for\r\nOk so we got some intro to closure, but let\'s state what we can use them for:\r\n\r\nCreating private variables, we can create a lexical environment long after the outer function has finished executing, this enables us to treat the lexical environment as if it were private variables in a class. This enables us to write code like this:\r\n   function useState(initialValue) {\r\n     let a = initialValue;\r\n     return [ () => a, (b) => a = b];\r\n   }\r\n\r\n   const [health, setHealth] = useState(10);\r\n   console.log(\'health\', health()) // 10\r\n   setHealth(2);\r\n   console.log(\'health\', health()) // 2\r\nAbove we see how we return an array that exposes methods both for returning and setting the variable a from the lexical environment\r\n\r\nPartial application, the idea is to take an argument and not apply it fully. We\'ve shown that in our very first example but let\'s show a more generic method partial():\r\n  const multiply(a, b) => a * b;\r\n\r\n  function partial(fn, ...outer) {\r\n    return function(...inner)  {\r\n      return fn.apply(this, outer.concat(inner))\r\n    }\r\n  }\r\n\r\n  const multiply3 = partial(multiply, 3);\r\n  console.log(multiply3(7)) // 21\r\nThe above code collects all the arguments for the first function outer and then it returns the inner function. Next, you can invoke the return value, as it is a function, like so:\r\n  console.log(multiply3(7)) // 21\r\nOk, I get how this works I think. What about an application, when do I actually use it?\r\n\r\nWell, it\'s a bit of an academic construct, it\'s definitely used in libraries and frameworks though.\r\n\r\nThat\'s it?\r\n\r\nI mean, you can make functions more specialized using it.\r\n\r\nJust one example?\r\n\r\nSure, here is one:\r\n  const baseUrl = \'http://localhost:3000\';\r\n\r\n  function partial(fn, ...args) {\r\n      return (...rest) => {\r\n        return fn.apply(this, args.concat(rest))\r\n      }\r\n  }\r\n\r\n  const getEndpoint = (baseUrl, resource, id) => {\r\n      return `${baseUrl}/${resource}/${id ? id: \'\'}`;\r\n  }\r\n\r\n  const withBase = partial(getEndpoint, baseUrl);\r\n  const productsEndpoint = withBase(\'products\')\r\n  const productsDetailEndpoint = withBase(\'products\', 1)\r\n\r\n  console.log(\'products\', productsEndpoint);\r\n  console.log(\'products detail\', productsDetailEndpoint);\r\nThe above is quite a common scenario, constructing a URL endpoint. Above we create a more specialized version with withBase that is partially applying the baseUrl. Then we go on to add the specific resource idea like so:\r\n   const productsEndpoint = withBase(\'products\')\r\n   const productsDetailEndpoint = withBase(\'products\', 1)\r\nIt\'s not a thing you have to use, but it\'s nice and can make your code less repetitive. It\'s a pattern.\r\n\r\nIsolate part of your code/pass the JavaScript interview, for this one let\'s first show a problem that is very common in JS interviews. I got the same question asked to me in three interviews in a row. The question can also be found if you Google it. Cause guess what, that JavaScript interview process is broken.\r\nWhat do you mean broken?\r\n\r\nNobody cares if you have many years of experience doing this and that and knows a bunch of frameworks. Instead, the interviewers usually spend 5 minutes googling JavaScript questions to ask you.\r\n\r\nSounds like they are asking about the JavaScript language and it\'s core concepts. Isn\'t that good?\r\n\r\nYea that part is good, but JavaScript has so much weirdness to it there\'s a reason Crockford wrote a book called JavaScript the good parts, and that it\'s a very thin book. There are definitely good parts to it but also a lot of weirdness.\r\n\r\nYou were going to tell me about an interview problem?\r\n\r\nRight, so here\'s the code, can you guess the answer?\r\n   for (var i = 0; i < 10; i++) {\r\n    setTimeout(() => {\r\n      return console.log(`Value of ${i}`);\r\n    }, 1000)\r\n   }  \r\n1,2,3,4,5,6,7,8,9,10\r\n\r\nNot hired.\r\n\r\nThat\'s cold, can you tell me why?\r\n\r\nsetTimeout is asynchronous and is called after 1000 milliseconds. The for-loop executes right away so that by the time setTimeout is called the i parameter will have it\'s maximum value 10. So it prints 10, 10 times. But we can fix it so it prints it in an ascending way.\r\n\r\nHow?\r\n\r\nBy creating a scope, an isolation in the code, like so:\r\n   for (var i = 0; i < 10; i++) {\r\n     ((j) => setTimeout(() => {\r\n      return console.log(`Value of ${j}`);\r\n    }, 1000))(i)\r\n   }\r\nThe above creates an Immediately Invoked Function Expression, IIFE (It does look iffy right ;) ? ). It accomplishes isolation whereby each value of i is bound to a specific function definition and execution.\r\n\r\nThere is an alternative to the above solution, using let. The let keyword creates a scoped code block. So the code would instead look like so:\r\n   for (let i = 0; i < 10; i++) {\r\n    setTimeout(() => {\r\n      return console.log(`Value of ${i}`);\r\n    }, 1000)\r\n   }  \r\nThank you Quozzo for pointing this out.\r\n\r\nSummary\r\nOk, so this whole closure business is about Cows and fences and privacy\r\n\r\nAnd JavaScript ;)', 'Chris Noring', '#javascript', '#web', '#tutorial', '#beginners', NULL, '2020-07-04 00:46:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://dev.to/itnext/how-you-can-learn-closures-in-javascript-and-understand-when-to-use-them-2lk5'),
(5, 'e8ec088@sairamtap.edu.in', 'My First Post In Eduhub :)', 'This is my First post in Eduhub. I am very much delighted to share in this Wonderful Platform!', 'Jayachandran Ramadoss', '#sairam', '#engineering', '#ECE', NULL, NULL, '2020-07-07 21:35:25', '1594137925vinayagar.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.sairam.edu.in'),
(13, 'e8ec088@sairamtap.edu.in', 'Is C still a high level language?', 'I keep hearing that C is no longer a High Level Programming Language because it is no abstractions, has pointers, have to handle memory on our own, no string data type, unsafe etc.', 'Jayachandran Ramadoss', '#sairam', '#engineering', '#it', NULL, NULL, '2020-07-07 22:33:39', '3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://dev.to/delta456/is-c-still-a-high-level-language-27ml'),
(15, 'e8ec088@sairamtap.edu.in', 'Be You!', '', 'Jayachandran Ramadoss', '#sairam', '#webdevelopement', '#ECE', NULL, NULL, '2020-07-07 22:38:47', '15941417271.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.sairam.edu.in'),
(16, 'e8ec088@sairamtap.edu.in', 'International Conference on Cloud Computing', 'Our College is going to conduct an International Conference on Cloud Computing. This conference is very much interesting for the students those who want to participate in.', 'Jayachandran Ramadoss', '#conference', '#sairam', '#ECE', NULL, NULL, '2020-07-08 11:12:05', '15941869256.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.ic3iot.sairam.edu.in'),
(1, 'e8ec088@sairamtap.edu.in', 'Yet another intro to Promise, async - await in JavaScript', 'Heads Up\r\nI am assuming you know basic JavaScript (>= ES6)\r\nThis post is rather semantic than syntactic\r\nI have put up links for further explanations wherever I thought would be necessary.\r\nLet\'s Go\r\nExamples are the best way to make someone understand something because it\'s easier to correlate with something practical than digest theory - Asif Mohammad\r\n\r\nFor example, every time we search for the meaning of a word online we tend to read its examples to make more sense.\r\n\r\nSee what I did there? ?\r\n\r\nSo lets just consider an example of baking and eating some delicious cake. We can break down the whole process into three basic steps\r\n\r\nBaking Cake\r\nServing Cake\r\nEating Cake\r\nThe Javascript equivalent of this process could be portrayed as the following functions\r\nconst bakeCake = () => console.log(\'Cake is baked\');\r\nconst serveCake = () => console.log(\'Cake is served\');\r\nconst eatCake = () => console.log(\'Cake eaten\');\r\nYes, it is neither a proper equivalence nor I am eligible to be a good cook but it serves the purpose if not the cake.?\r\n\r\nOur cake baking journey would go something like\r\nbakeCake(); // Cake is baked\r\nserveCake(); // Cake is served\r\neatCake(); // Cake is eaten\r\nBut most real world scenarios like baking cake and scenarios on the web like fetching user posts, have something in common, they take time\r\n\r\nLets adjust our functions so that they reflect such and lets consider each of our step takes 2 seconds of time\r\nconst bakeCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is baked\')\r\n  }, 2000);\r\n};\r\nconst serveCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is served\')\r\n  }, 2000);\r\n};\r\nconst eatCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is eaten\')\r\n  }, 2000);\r\n};\r\nWe cannot call these three functions sequentially because they will not run synchronously. Why?\r\n\r\nSo we should follow the standard callback pattern which is being used for a long time now.\r\n\r\nUsing Callback Functions\r\nconst bakeCake = (cbkFn) => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is baked\');\r\n    cbkFn();\r\n  }, 2000);\r\n};\r\n\r\nconst serveCake = (cbkFn) => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is served\');\r\n    cbkFn();\r\n  }, 2000);\r\n};\r\n\r\nconst eatCake = () => {\r\n  setTimeout(()=>{\r\n    console.log(\'Cake is eaten\')\r\n  }, 2000);\r\n};\r\n\r\nbakeCake(()=>{\r\n  serveCake(()=>{\r\n    eatCake();\r\n  });\r\n});\r\nUnderstanding the callback pattern\r\nWhen we use callbacks we expect the function we pass to be called back when required (hence the name callback functions). The problem with callbacks is the often occurring Callback Hell.\r\n\r\nConsider our cake baking, when the steps are extended it becomes\r\nbakeCake(() => {\r\n  decorateCake(() => {\r\n    tasteCake(() => {\r\n      cutCake(() => {\r\n        serveCake(() => {\r\n          eatCake(() => {\r\n\r\n          });\r\n        });\r\n      });\r\n    });\r\n  });\r\n});\r\nThis is what we call as the Callback Hell. The more things you are willing to do in this process the more complex and messy it will get. It works, It\'s fine but we always want something batter better.\r\n\r\nPromise\r\nPromise as the name goes is a pattern, rather than being an object/function, where you are promised the execution of a piece of code and it enables you to code further based on your trust on that promise. JS Engine is a machine so you can always trust when it promises you, unlike us evil Humans.\r\n\r\nRewriting our example using promises.\r\nLets skip serving the cake (yes we are the wild ones who eat directly off the stove)\r\nconst bakeCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = () => {\r\n  setTimeout(() => {\r\n    console.log(\'Cake is eaten\');\r\n  }, 2000);\r\n};\r\n\r\nbakeCake().then(eatCake);\r\nWhat we did here is instead of executing the bakeCake function normally, we are enclosing it in a Promised environment. Previously we did not return anything in bakeCake but now we are returning a Promise to the callee.\r\n\r\nA promise that the piece of code enclosed is executed with an assurance that once its completed, either successfully or broke down due to some abnormality, you will be notified.\r\n\r\nresolve being the indicator of success and\r\nreject for any abnormal execution (mostly for an error)\r\n\r\nIn our case of bakeCake we are resolving the promise ( notifying the callee that the piece of code which was promised to be supervised has completed successfully) and on the callee\'s side we can listen to the notification with then and the abnormalities with catch which we haven\'t covered here.\r\n\r\nPromises enable chaining which is not possible by callbacks.\r\nSuppose we had to log our cake baking. We could chain our functions as\r\nconst bakeCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      cakeLog.push(\'Perfectly baked!\')\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst serveCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is served\');\r\n      cakeLog.push(\'Served Well\');\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = (cakeLog) => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is eaten\');\r\n      cakeLog.push(\'Ate like its the last cake on earth\')\r\n      resolve(cakeLog);\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nbakeCake([])\r\n  .then(serveCake)\r\n  .then(eatCake)\r\n  .then(console.log);\r\nWe pass in an empty array [] to bakeCake and when it resolves it pushes its own log statement into the array then reaches the first then when resolved and the function you pass as the parameter to then gets the parameter as the content you passed into the resolve call.\r\n\r\nTo understand better. We can rewrite the function calls as\r\nlet cakeLog = [];\r\nbakeCake(cakeLog).then(cakeLog => {\r\n  serveCake(cakeLog).then(cakeLog => {\r\n    eatCake(cakeLog).then(cakeLog => {\r\n      console.log(cakeLog);\r\n    });\r\n  });\r\n});\r\nWe pass cakeLog into bakeCake and we get it back (after getting updated in the cakeLog) as a parameter to the function we pass in to the then call. So we can pass it along to serveCake and repeat the same till we need to consume the accumulated/gross data.\r\n\r\nIt makes more sense when we correlate to a actual scenario like\r\nlet userID = 1001;\r\ngetUser(userID)\r\n    .then((user) => getPosts(user))\r\n    .then((posts) => getTotalLikes(posts))\r\n    .then((likeCount) => console.log(likeCount));\r\nBut We always want better.\r\n\r\nasync - await\r\nasync - await enable us to write asynchronous code just like how we would write synchronous code by acting as a syntactical sugar to the powerful Promise pattern.\r\n\r\nA blueprint of using async await with respect to the underlying Promise pattern would be\r\nasync function(){\r\n  let paramYouSendIntoResolve = await promReturningFn(); \r\n}\r\nCall your asynchronous function but use an await keyword before it\r\nInstead of passing in a function to capture the resolved data. Take it as a return value of the function. Wow\r\nJust one minor discomfort. As you are doing asynchronous stuff amidst of ever synchronous JS flow. Just append async to the function where you use await so that JS Engine knows you are going to do async stuff and interprets accordingly because it has to turn them into Promises later.\r\nBack to our cake baking. (excluded the logging stuff)\r\nconst bakeCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is baked\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst serveCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is served\');\r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\nconst eatCake = () => {\r\n  return new Promise((resolve, reject) => {\r\n    setTimeout(() => {\r\n      console.log(\'Cake is eaten\'); \r\n      resolve();\r\n    }, 2000);\r\n  });\r\n};\r\n\r\n(async ()=>{\r\n  await bakeCake();\r\n  await serveCake();\r\n  await eatCake();\r\n})();\r\nNotice that we have used an IIFE here to force async function execution.\r\n\r\nThere we are!\r\nWe have reached the ability to call asynchronous functions Asif as if they were synchronous.\r\n\r\nThanks for reading. I hope you got something out of this', 'Asif Mohammad', '#javascript', '#web', '#tutorial', NULL, NULL, '2020-07-04 00:29:47', 'thumbs/about-us.jpg', 'thumbs/diagonal_building.jpg', 'thumbs/concert.jpg', NULL, NULL, NULL, NULL, NULL, 'https://dev.to/halfdrownedbiscuit/yet-another-intro-to-promise-async-await-in-javascript-4k4c'),
(2, 'e8ec088@sairamtap.edu.in', 'Break out of your Comfort Zone as an Engineer', 'As an Engineer, being in the same environment for a long time makes it hard to adapt to something new. Break out of your comfort zone and explore new concepts. This will help your personal growth tremendously and elevate your career. Let me explain to you why by sharing my story.\r\n\r\nHow it all started…\r\nBack in 2013, my fascination with Cloud and Automation started when I was developing my research thesis for the Amsterdam University of Applied Sciences. During that time Cloud providers were just starting to come up as a decent alternative to on-premise hosting providers. On-premise data centers consisted of long-lived servers that needed to be patched and upgraded (both software & hardware).\r\n\r\nMaintaining and monitoring these servers used to be a full-time task for an engineer before automation took place. Instead of maintaining these servers, I got inspired to automate and make these environments scalable, self-healing, and immutable by creating and testing Proof of Concepts in Amazon Web Services (AWS).\r\n\r\nThis meant I had to learn more about the DevOps way of thinking and use toolings such as CloudFormation, Git, Python (at that time it was very unusual).\r\n\r\nThe discovery…\r\nI learned from my thesis that the concepts and innovation the Cloud offered gave me the freedom to architect my own infrastructure in such a way to make your infrastructure resilient and highly available. This was such an eye-opener for me because I never would have thought it was possible to create and design your own infrastructure based on your own requirements. AWS supplied the toolbox and gave me the ability to build and create my own infrastructure. Comparing this to on-premise vendors it wasn’t possible to build an infrastructure based on your own requirements because you were bound by the limits and restrictions that they supplied.\r\n\r\nAfter graduating, the company where I researched and completed my thesis hired me as a jr. Unix engineer. Our job was to maintain on-premise servers of clients e.g. patching, monitoring, backup/restore, and deploy updates to applications. After some time I began wondering why we weren’t trying to automate repetitive tasks in our team to improve fault tolerance and speed up clients’ application deployments.\r\n\r\nMy teammates (Unix engineers) were against the idea to automate, reasoning that it took too much effort to implement and test it. The people that said this were smart people that I looked up to, but unfortunately they were very resistant to change! This became a real problem for me because I felt I hit the ceiling of my growth within this organization. Management didn’t feel the necessity to move and adapt to change since their direct competition didn’t innovate.\r\n\r\nAt that point, I began to doubt myself because the engineers I worked with and looked up to had their reasons not to spend the effort to automate and look into the benefits of the Cloud. The same goes for the strategy of the organization, which was more focused on maintaining current workloads on-premise and not spending any efforts on innovation.\r\n\r\nSumming up I had every reason to stay in my comfort zone , this would’ve been the easy road. Naturally, we humans avoid anything uncomfortable. Having experienced the Cloud and its possibilities and innovations made it very hard to persuade myself into continuing my daily comfortable tasks at work. I felt I needed to embrace discomfort to make progress as an engineer and become a better version of myself.\r\n\r\nReflecting on the conversations I had with my former colleagues and managers. I started noticing similarities in their arguments and the underlying reason was uncertainty! They didn’t believe in the Cloud because through conversations I found out most of the colleagues had no experience with it and couldn’t relate to the possibilities it had to offer. One specific feature of AWS that scared our management for example was the “pay-as-you-go” model. Our business was catered to fixed fees and was in a panic to find a way to monetize the model that AWS offered.\r\n\r\nI knew as a Junior Engineer, I wasn’t able to persuade Senior Engineers and management to change their minds. Then it became clear to me that I had to follow my own intuition with the knowledge I acquired and take a risk to look for new opportunities to pursue my new passion.\r\n\r\nI decided to look for change and found a startup company that shared the same interests. We both felt the same way on how AWS was growing at that time and we both felt that eventually, on-premise was going to move to the Cloud because this would enable innovation and growth for businesses.\r\n\r\nThe startup I worked for enabled me to experience multiple migrations, from small businesses to large enterprises. Using the tools provided by AWS, we were able to innovate and improve resiliency and availability with automation.\r\n\r\nLooking back…\r\nIf I look back on it… I’m very glad I picked this path when I was at that enormous crossroad in my career. I could’ve listened to my former colleagues and grow to become a better Unix engineer and stay in my comfort zone. But in the end, I didn’t. I saw the Cloud’s potential by actually trying it out and making my hands dirty.\r\n\r\nThrough this journey, I’ve met lots of great new people whom I learned a lot from. The cool thing about it is that when I got surrounded by likeminded people my motivation and ability to learn improved tremendously!\r\n\r\nWhat have I learned through this journey?\r\nSo what I’ve learned from my journey is – In order to grow, you should get out of your comfort zone, take risks, and be open to change. In the beginning, it was really uncomfortable to start coding as a Unix engineer (I knew basic script skills). Naturally, we humans avoid anything uncomfortable. But the key is to embrace discomfort so you can explore your limits and finally push for more! The results that come out of it will motivate you to challenge yourself even more!\r\n\r\nNext, find a technology that you think will still be there in the upcoming years. Make sure to update yourself on new technologies and decide what you’ll be focusing on. For example, I used to focus a lot on automating operations in the Cloud and establishing high availability for monolithic applications. Over the years I’ve adapted myself to containerize these applications into microservices. With the experience I’ve acquired I see that the trend is moving towards serverless architectures. So now I’m spending my time focusing on serverless and my programming skills.\r\n\r\nAnother learning I want to share is to ignore negative opinions from colleagues or people if they don’t have valid arguments. People might tell you you’ll never reach your goal or that you’ll make a bad decision. Try to find the underlying reason why people react like that. It could be because they have doubts and uncertainties themselves and reflect that back on you.\r\n\r\nAt last, changing your environment every once in a while to get a fresh perspective on things can enforce you to become creative and open to new ideas. This can be done by changing companies or surrounding yourself with different people by swapping teams. Challenging yourself in a fresh environment with different mindsets will help you to open up and experience how powerful it can be to think differently.\r\n\r\nFuture?\r\nI’ve been pushing myself to explore new opportunities, one of them is public speaking. I found out with previous experiences in former companies that I wasn’t visible enough (through feedback). I did my job very well, but I was introverted in a way and didn’t showcase a lot of what I’ve accomplished and built.\r\n\r\nLast year, I started my new job as an AWS Cloud Consultant. This gave me the opportunity to be more at the forefront and engage more with customers on a different level. This felt uncomfortable first, but I decided to take it a step further…\r\n\r\nI noticed that AWS developed the AWS Authorized Instructor (AAI) course. This course allows AWS partners (which our company is part of) or it’s own employees to provide the highest quality training experience to its clients. Since public speaking was something I admired but felt very uncomfortable doing. However, this felt like the perfect opportunity to learn how to give a training course. So I set my goal for this year (2020) to become an instructor. For this, I had to demonstrate a strong technical background and adherence to the standards defined by the AWS Training & Certification Team for teaching and delivering AWS-approved training courses. After completing the assessment of AWS, I became an AWS Authorized Instructor Champion!', 'Danny ???', '#career', '#aws', '#cloud', '#engineer', '#skills', '2020-07-04 00:29:47', 'thumbs/1.jpg', 'thumbs/2.jpg', 'thumbs/3.jpg', 'thumbs/4.jpg', NULL, NULL, NULL, NULL, 'https://dev.to/dsteenman/break-out-of-your-comfort-zone-as-an-engineer-13dl'),
(3, 'e8ec088@sairamtap.edu.in', 'Practical Functional Programming in JavaScript - Side Effects and Purity', 'A function is said to be pure if it has the following properties, Its return value is the same for the same arguments Its evaluation has no side effects (source) Here side effect from stackoverflow A side effect refers simply to the modification of some kind of state - for instance Changing the value of a variable;Writing some data to disk;Enabling or disabling a button in the User Interface', 'Richard Tong', '#python', '#css', '', '', '', '2020-07-03 18:00:57', 'pure.jpg', '', '', '', '', NULL, NULL, '', 'dev.to/richytong/');
INSERT INTO `tbl_post` (`id`, `post_owner`, `post_title`, `post_description`, `author`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `datetime`, `post_image1`, `post_image2`, `post_image3`, `post_image4`, `post_image5`, `post_video`, `post_audio`, `post_code`, `post_url`) VALUES
(4, 'e8ec088@sairamtap.edu.in', 'How you can learn Closures in JavaScript and understand when to use them', 'if you are like me, you hear concepts like lexical environments, closure, execution context and you\'re like yep I heard it, can\'t remember what they are but I\'m probably using it. And you know what, you\'d be correct. You are most likely using it but who can remember these terms anyway?\r\n\r\nI mean most likely the only time we need to know what the name of these terms is, is when we need to study up for an interview in JavaScript. I\'m not saying don\'t learn the concepts, I\'m saying as long as you know how they work the world won\'t implode if you call them something else:\r\n\r\nBear claw\r\n\r\nWe know that we need to know these terms at the point of the interview, the rest of the time we just need to know how things work when we code, and we do.\r\n\r\nLet\'s dig deeper, how come we can understand and even apply these terms but not know what they are called? Is it bad naming? Maybe, in my case, it\'s about realizing I\'m a visual learner and I need an image to remember things by, or it doesn\'t stick..\r\n\r\nSo welcome to a crazy ride into my brain - let\'s talk Closures :) - All aboard the crazy train ;)Crazy train\r\n\r\nClosures\r\nWhat are closures? Closures are a function bundled with its lexical environment.\r\n\r\nThank you professor but I barely understood a word\r\n\r\nOk, let\'s look at some code:\r\nfunction outer() {\r\n  // lexical environment\r\n  let a = 1;\r\n  return function inner(b) {\r\n    return a + b\r\n  }\r\n}\r\nWhat you are seeing above is a function outer() enclosing another function inner. It\'s not only enclosing inner() but also the variable a.\r\n\r\nWhat\'s so great about this?\r\n\r\nEven after the function outer() has stopped executing the function inner() will have access to its lexical environment, in this case, the variable a.\r\n\r\nLexical environment, sounds like lexicon, huge and heavy books. Show me.\r\n\r\nOk, imagine we call the code like this:\r\nconst fn = outer();\r\nfn(5) // 6\r\nAbove it remembers a to have value 1.\r\n\r\nOk, so it\'s like it treats a as a private variable, but in a function?\r\n\r\nYea, precisely.\r\n\r\nI have an idea how to remember this :)\r\n\r\nYes?\r\n\r\nCows\r\n\r\nCows?!\r\n\r\nYes Cows in an enclosure with the outer function as the enclosure and the cows as the inner function and the private variable, like this:\r\n\r\nCows in an enclosure\r\n\r\nOook, slooowly stepping away.\r\n\r\nWhat can we use them for\r\nOk so we got some intro to closure, but let\'s state what we can use them for:\r\n\r\nCreating private variables, we can create a lexical environment long after the outer function has finished executing, this enables us to treat the lexical environment as if it were private variables in a class. This enables us to write code like this:\r\n   function useState(initialValue) {\r\n     let a = initialValue;\r\n     return [ () => a, (b) => a = b];\r\n   }\r\n\r\n   const [health, setHealth] = useState(10);\r\n   console.log(\'health\', health()) // 10\r\n   setHealth(2);\r\n   console.log(\'health\', health()) // 2\r\nAbove we see how we return an array that exposes methods both for returning and setting the variable a from the lexical environment\r\n\r\nPartial application, the idea is to take an argument and not apply it fully. We\'ve shown that in our very first example but let\'s show a more generic method partial():\r\n  const multiply(a, b) => a * b;\r\n\r\n  function partial(fn, ...outer) {\r\n    return function(...inner)  {\r\n      return fn.apply(this, outer.concat(inner))\r\n    }\r\n  }\r\n\r\n  const multiply3 = partial(multiply, 3);\r\n  console.log(multiply3(7)) // 21\r\nThe above code collects all the arguments for the first function outer and then it returns the inner function. Next, you can invoke the return value, as it is a function, like so:\r\n  console.log(multiply3(7)) // 21\r\nOk, I get how this works I think. What about an application, when do I actually use it?\r\n\r\nWell, it\'s a bit of an academic construct, it\'s definitely used in libraries and frameworks though.\r\n\r\nThat\'s it?\r\n\r\nI mean, you can make functions more specialized using it.\r\n\r\nJust one example?\r\n\r\nSure, here is one:\r\n  const baseUrl = \'http://localhost:3000\';\r\n\r\n  function partial(fn, ...args) {\r\n      return (...rest) => {\r\n        return fn.apply(this, args.concat(rest))\r\n      }\r\n  }\r\n\r\n  const getEndpoint = (baseUrl, resource, id) => {\r\n      return `${baseUrl}/${resource}/${id ? id: \'\'}`;\r\n  }\r\n\r\n  const withBase = partial(getEndpoint, baseUrl);\r\n  const productsEndpoint = withBase(\'products\')\r\n  const productsDetailEndpoint = withBase(\'products\', 1)\r\n\r\n  console.log(\'products\', productsEndpoint);\r\n  console.log(\'products detail\', productsDetailEndpoint);\r\nThe above is quite a common scenario, constructing a URL endpoint. Above we create a more specialized version with withBase that is partially applying the baseUrl. Then we go on to add the specific resource idea like so:\r\n   const productsEndpoint = withBase(\'products\')\r\n   const productsDetailEndpoint = withBase(\'products\', 1)\r\nIt\'s not a thing you have to use, but it\'s nice and can make your code less repetitive. It\'s a pattern.\r\n\r\nIsolate part of your code/pass the JavaScript interview, for this one let\'s first show a problem that is very common in JS interviews. I got the same question asked to me in three interviews in a row. The question can also be found if you Google it. Cause guess what, that JavaScript interview process is broken.\r\nWhat do you mean broken?\r\n\r\nNobody cares if you have many years of experience doing this and that and knows a bunch of frameworks. Instead, the interviewers usually spend 5 minutes googling JavaScript questions to ask you.\r\n\r\nSounds like they are asking about the JavaScript language and it\'s core concepts. Isn\'t that good?\r\n\r\nYea that part is good, but JavaScript has so much weirdness to it there\'s a reason Crockford wrote a book called JavaScript the good parts, and that it\'s a very thin book. There are definitely good parts to it but also a lot of weirdness.\r\n\r\nYou were going to tell me about an interview problem?\r\n\r\nRight, so here\'s the code, can you guess the answer?\r\n   for (var i = 0; i < 10; i++) {\r\n    setTimeout(() => {\r\n      return console.log(`Value of ${i}`);\r\n    }, 1000)\r\n   }  \r\n1,2,3,4,5,6,7,8,9,10\r\n\r\nNot hired.\r\n\r\nThat\'s cold, can you tell me why?\r\n\r\nsetTimeout is asynchronous and is called after 1000 milliseconds. The for-loop executes right away so that by the time setTimeout is called the i parameter will have it\'s maximum value 10. So it prints 10, 10 times. But we can fix it so it prints it in an ascending way.\r\n\r\nHow?\r\n\r\nBy creating a scope, an isolation in the code, like so:\r\n   for (var i = 0; i < 10; i++) {\r\n     ((j) => setTimeout(() => {\r\n      return console.log(`Value of ${j}`);\r\n    }, 1000))(i)\r\n   }\r\nThe above creates an Immediately Invoked Function Expression, IIFE (It does look iffy right ;) ? ). It accomplishes isolation whereby each value of i is bound to a specific function definition and execution.\r\n\r\nThere is an alternative to the above solution, using let. The let keyword creates a scoped code block. So the code would instead look like so:\r\n   for (let i = 0; i < 10; i++) {\r\n    setTimeout(() => {\r\n      return console.log(`Value of ${i}`);\r\n    }, 1000)\r\n   }  \r\nThank you Quozzo for pointing this out.\r\n\r\nSummary\r\nOk, so this whole closure business is about Cows and fences and privacy\r\n\r\nAnd JavaScript ;)', 'Chris Noring', '#javascript', '#web', '#tutorial', '#beginners', NULL, '2020-07-04 00:46:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://dev.to/itnext/how-you-can-learn-closures-in-javascript-and-understand-when-to-use-them-2lk5'),
(5, 'e8ec088@sairamtap.edu.in', 'My First Post In Eduhub :)', 'This is my First post in Eduhub. I am very much delighted to share in this Wonderful Platform!', 'Jayachandran Ramadoss', '#sairam', '#engineering', '#ECE', NULL, NULL, '2020-07-07 21:35:25', '1594137925vinayagar.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.sairam.edu.in'),
(13, 'e8ec088@sairamtap.edu.in', 'Is C still a high level language?', 'I keep hearing that C is no longer a High Level Programming Language because it is no abstractions, has pointers, have to handle memory on our own, no string data type, unsafe etc.', 'Jayachandran Ramadoss', '#sairam', '#engineering', '#it', NULL, NULL, '2020-07-07 22:33:39', '3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://dev.to/delta456/is-c-still-a-high-level-language-27ml'),
(15, 'e8ec088@sairamtap.edu.in', 'Be You!', '', 'Jayachandran Ramadoss', '#sairam', '#webdevelopement', '#ECE', NULL, NULL, '2020-07-07 22:38:47', '15941417271.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.sairam.edu.in'),
(16, 'e8ec088@sairamtap.edu.in', 'International Conference on Cloud Computing', 'Our College is going to conduct an International Conference on Cloud Computing. This conference is very much interesting for the students those who want to participate in.', 'Jayachandran Ramadoss', '#conference', '#sairam', '#ECE', NULL, NULL, '2020-07-08 11:12:05', '15941869256.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.ic3iot.sairam.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `wa_page`
--

CREATE TABLE `wa_page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_heading` varchar(255) DEFAULT NULL,
  `page_sub_heading` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_kewords` varchar(255) DEFAULT NULL,
  `page_description` longtext,
  `outsrc_url` varchar(255) DEFAULT NULL,
  `open_in` enum('1','2') NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '1=>Active , 0=>Deactivate',
  `last_access` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wa_user`
--

CREATE TABLE `wa_user` (
  `user_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passcode` varchar(50) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT 'default.jpg',
  `cover_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `sex` enum('Male','Female') DEFAULT 'Male',
  `dept` varchar(30) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `institution` varchar(100) NOT NULL,
  `about_you` text,
  `job_title` varchar(255) DEFAULT NULL,
  `featured1` varchar(300) NOT NULL,
  `featured2` varchar(300) NOT NULL,
  `featured3` varchar(300) NOT NULL,
  `featured4` varchar(300) NOT NULL,
  `skill1` varchar(500) NOT NULL,
  `skill2` varchar(500) NOT NULL,
  `skill3` varchar(500) NOT NULL,
  `skill4` varchar(500) NOT NULL,
  `accomplishment1` varchar(300) NOT NULL,
  `accomplishment2` varchar(300) NOT NULL,
  `accomplishment3` varchar(300) NOT NULL,
  `accomplishment4` varchar(300) NOT NULL,
  `accomplishment5` varchar(300) NOT NULL,
  `accomplishment6` varchar(300) NOT NULL,
  `accomplishment7` varchar(300) NOT NULL,
  `accomplishment8` varchar(300) NOT NULL,
  `accomplishment9` varchar(300) NOT NULL,
  `accomplishment10` varchar(300) NOT NULL,
  `project1` varchar(255) NOT NULL,
  `project2` varchar(255) NOT NULL,
  `project3` varchar(255) NOT NULL,
  `project4` varchar(255) NOT NULL,
  `project5` varchar(255) NOT NULL,
  `project6` varchar(255) NOT NULL,
  `project7` varchar(255) NOT NULL,
  `project8` varchar(255) NOT NULL,
  `project9` varchar(255) NOT NULL,
  `project10` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `edumate` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `current_project1` varchar(255) NOT NULL,
  `current_project2` varchar(255) NOT NULL,
  `current_project3` varchar(255) NOT NULL,
  `current_project4` varchar(255) NOT NULL,
  `current_project5` varchar(255) NOT NULL,
  `status` enum('1','2','3','4','0') NOT NULL DEFAULT '0',
  `submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wa_user`
--

INSERT INTO `wa_user` (`user_id`, `email`, `passcode`, `first_name`, `last_name`, `profile_image`, `cover_image`, `sex`, `dept`, `birthday`, `phone`, `city`, `institution`, `about_you`, `job_title`, `featured1`, `featured2`, `featured3`, `featured4`, `skill1`, `skill2`, `skill3`, `skill4`, `accomplishment1`, `accomplishment2`, `accomplishment3`, `accomplishment4`, `accomplishment5`, `accomplishment6`, `accomplishment7`, `accomplishment8`, `accomplishment9`, `accomplishment10`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `project7`, `project8`, `project9`, `project10`, `linkedin`, `github`, `edumate`, `website`, `current_project1`, `current_project2`, `current_project3`, `current_project4`, `current_project5`, `status`, `submit_date`) VALUES
(1, 'e8ec088@sairamtap.edu.in', 'password', 'Jayachandran', 'Ramadoss', 'Jayachandran1.jpg', '1Jayachandrancover.jpg', 'Male', 'ECE', '2001-08-03', '7358482467', 'Chennai', 'Sri Sairam Engineering College', 'Thriving Engineer | Full Stack Developer | AI Enthusiast', 'Student', 'Full stack Developer certification by University Of London', 'Won First Price in Smart India Hackathon 2020.', 'Intern @ MIT Square', 'EDUHUB - An Educational Meetup application developed for my Own College.', 'Cloud Computing | Networking | Signal Processing', 'Full Stack Developer | Data Scientist | Programmer | AI Enthusiast', 'Leadership | Communication | Resilience | Dedication & Hardwork', 'Volleyball player | Dancer', 'Acheived First prize in Smart India Hackathon 2020.', 'Published an Article in International Conference IC3IOT 2020.', 'Won First Prize in sai Magnicon Project Expo 2019.', 'Won Volleyball Championship Twice', '', '', '', '', '', '', 'EDUHUB - An Educational Meetup Application to embrace students', 'EDUBOT - A Digital Classroom for the students', 'Better And Faster Emergency Care During Accidents', 'COR X Management System 2020', 'Patient Monitoring System', '', '', '', '', '', 'https://www.linkedin.com/in/jayachandran-ramadoss-80345a18a/', 'https://www.github.com/jrjakiro', 'https://edumate.sairam.edu.in', 'https://www.google.com/JaychandranRamadoss', 'Augumented Reality in Pc', 'AR skilled', 'Web developer', 'Digital Marketing Person', 'Mobile App developer', '1', '2018-04-25 14:05:40'),
(2, 'sandhiya@gmail.com', 'password', 'Sandhiya', 'Ramadoss', 'default.jpg', 'default.jpg', 'Male', 'ECE', '1999-03-18', '7358482467', 'Chennai', 'L&T Infotech', 'Create Awesome stuffs!', 'HR Manager', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '2020-07-11 22:53:34');
--
-- Database: `eduhub-sairam`
--
CREATE DATABASE IF NOT EXISTS `eduhub-sairam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `eduhub-sairam`;

-- --------------------------------------------------------

--
-- Table structure for table `cproject`
--

CREATE TABLE `cproject` (
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `requirement1` text NOT NULL,
  `requirement2` text NOT NULL,
  `requirement3` text NOT NULL,
  `requirement4` text NOT NULL,
  `requirement5` text NOT NULL,
  `requirement6` text NOT NULL,
  `requirement7` text NOT NULL,
  `requirement8` text NOT NULL,
  `requirement9` text NOT NULL,
  `requirement10` text NOT NULL,
  `member1` text NOT NULL,
  `member2` text NOT NULL,
  `member3` text NOT NULL,
  `member4` text NOT NULL,
  `member5` text NOT NULL,
  `member6` text NOT NULL,
  `member7` text NOT NULL,
  `member8` text NOT NULL,
  `member9` text NOT NULL,
  `member10` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `title` text,
  `description` text,
  `meta` varchar(255) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `lastaccess` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `title`, `description`, `meta`, `url`, `lastaccess`) VALUES
(1, 'Welcome Page', 'WELCOME TO EDUHUB', 'welcome page landing page index page', 'a', 'index.php', '2021-05-10 03:57:00'),
(2, 'Home page', 'Home | Learn,Connect,Thrive', '', '', 'home.php', '2021-05-10 04:58:37'),
(3, 'Profile', 'Profile Page | Experience the Advancement', NULL, NULL, NULL, '2021-05-10 05:00:43'),
(4, 'Explore Page', 'Explore the Sairam and Innovations', NULL, NULL, NULL, '2021-05-10 05:00:43'),
(5, 'settings Page', 'Settings | Correct Your World', NULL, NULL, NULL, '2021-05-10 05:01:34'),
(6, 'about Page', 'About Us | Future of Innovation', NULL, NULL, NULL, '2021-05-10 05:02:15'),
(7, 'Login Page', 'Login to Make Wonders', NULL, NULL, NULL, '2021-05-10 05:04:00'),
(8, 'Signup Page', 'Signup For the World of Innovations', NULL, NULL, NULL, '2021-05-10 05:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `file1` varchar(50) NOT NULL,
  `fil2` varchar(50) NOT NULL,
  `file3` varchar(50) NOT NULL,
  `file4` varchar(50) NOT NULL,
  `file5` varchar(50) NOT NULL,
  `hashtags` varchar(200) NOT NULL,
  `mention1` varchar(100) NOT NULL,
  `mention2` varchar(100) NOT NULL,
  `mention3` varchar(100) NOT NULL,
  `mention4` varchar(100) NOT NULL,
  `mention5` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT '',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_image` varchar(50) DEFAULT NULL,
  `cover_image` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `featured1` varchar(500) DEFAULT NULL,
  `featured2` varchar(500) DEFAULT NULL,
  `featured3` varchar(500) DEFAULT NULL,
  `featured4` varchar(500) DEFAULT NULL,
  `featured5` varchar(500) DEFAULT NULL,
  `project1` varchar(500) DEFAULT NULL,
  `project2` varchar(500) DEFAULT NULL,
  `project3` varchar(500) DEFAULT NULL,
  `project4` varchar(500) DEFAULT NULL,
  `project5` varchar(500) DEFAULT NULL,
  `project6` varchar(500) DEFAULT NULL,
  `project7` varchar(500) DEFAULT NULL,
  `project8` varchar(500) DEFAULT NULL,
  `project9` varchar(500) DEFAULT NULL,
  `project10` varchar(500) DEFAULT NULL,
  `skill1` varchar(100) DEFAULT NULL,
  `skill2` varchar(100) DEFAULT NULL,
  `skill3` varchar(100) DEFAULT NULL,
  `skill4` varchar(100) DEFAULT NULL,
  `skill5` varchar(100) DEFAULT NULL,
  `skill6` varchar(100) DEFAULT NULL,
  `skill7` varchar(100) DEFAULT NULL,
  `skill8` varchar(100) DEFAULT NULL,
  `skill9` varchar(100) DEFAULT NULL,
  `skill10` varchar(100) DEFAULT NULL,
  `certification1` varchar(500) DEFAULT NULL,
  `certification2` varchar(500) DEFAULT NULL,
  `certification3` varchar(500) DEFAULT NULL,
  `certification4` varchar(500) DEFAULT NULL,
  `certification5` varchar(500) DEFAULT NULL,
  `certification6` varchar(500) DEFAULT NULL,
  `certification7` varchar(500) DEFAULT NULL,
  `certification8` varchar(500) DEFAULT NULL,
  `certification9` varchar(500) DEFAULT NULL,
  `certification10` varchar(500) DEFAULT NULL,
  `accomplishment1` varchar(500) DEFAULT NULL,
  `accomplishment2` text,
  `accomplishment3` text,
  `accomplishment4` text,
  `accomplishment5` text,
  `accomplishment6` text,
  `accomplishment7` text,
  `accomplishment8` text,
  `accomplishment9` text,
  `accomplishment10` text,
  `accomplishment11` text,
  `accomplishment12` text,
  `accomplishment13` text,
  `accomplishment14` text,
  `accomplishment15` text,
  `accomplishment16` text,
  `accomplishment17` text,
  `accomplishment18` text,
  `accomplishment19` text,
  `accomplishment20` text,
  `accomplishment21` text,
  `accomplishment22` text,
  `accomplishment23` text,
  `accomplishment24` text,
  `accomplishment25` text,
  `gitHub` text,
  `linkedin` text,
  `edumate` text,
  `website` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `first_name`, `last_name`, `status`, `last_seen`, `profile_image`, `cover_image`, `gender`, `dept`, `dob`, `mobile`, `city`, `institution`, `title`, `bio`, `featured1`, `featured2`, `featured3`, `featured4`, `featured5`, `project1`, `project2`, `project3`, `project4`, `project5`, `project6`, `project7`, `project8`, `project9`, `project10`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `skill6`, `skill7`, `skill8`, `skill9`, `skill10`, `certification1`, `certification2`, `certification3`, `certification4`, `certification5`, `certification6`, `certification7`, `certification8`, `certification9`, `certification10`, `accomplishment1`, `accomplishment2`, `accomplishment3`, `accomplishment4`, `accomplishment5`, `accomplishment6`, `accomplishment7`, `accomplishment8`, `accomplishment9`, `accomplishment10`, `accomplishment11`, `accomplishment12`, `accomplishment13`, `accomplishment14`, `accomplishment15`, `accomplishment16`, `accomplishment17`, `accomplishment18`, `accomplishment19`, `accomplishment20`, `accomplishment21`, `accomplishment22`, `accomplishment23`, `accomplishment24`, `accomplishment25`, `gitHub`, `linkedin`, `edumate`, `website`) VALUES
('1234@gmail.com', '123', 'j', 'r', 0, '2021-05-09 15:46:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('123@gmail.com', '123', 'Jr', 'Jakiro', 1, '2021-05-10 12:59:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1@gmail.com', '123', '1', '2', 1, '2021-05-10 05:26:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('e8ec088@sairamtap.edu.in', '123', 'Jayachandran', 'Ramadoss', 0, '2021-05-10 11:56:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('jrjakiro2001@gmail.com', '123', 'J', 'R', 0, '2021-05-10 05:09:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

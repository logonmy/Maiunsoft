-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-21 03:59:08
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiunsoft_portal`
--

-- --------------------------------------------------------

--
-- 表的结构 `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `city` int(11) DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `contact_name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `contact_number` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `agenda` text COLLATE utf8_bin,
  `create_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_activity`
--

INSERT INTO `tbl_activity` (`id`, `name`, `city`, `address`, `contact_name`, `contact_number`, `start_time`, `end_time`, `type`, `agenda`, `create_time`) VALUES
(1, '内容管理高峰论坛', 3, '宝山区沪太路5018弄', '李富强', '15000818051', '2017-02-01 00:00:00', '2017-02-03 00:00:00', 2, '发达双方的撒', '2017-03-19 20:35:15');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `bref` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `content` text COLLATE utf8_bin,
  `image` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `reference` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `author` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `title`, `bref`, `content`, `image`, `reference`, `group_id`, `create_time`, `author`, `keywords`) VALUES
(1, '建筑', '国务院常务会议通过的《“十三五”国家信息化规划》，规划的重点之一就是打破信息壁垒和“孤岛”，构建统一高效、互联互通、安全可靠的国家数据资源体系。为迎合信息时代的发展，实现传统建筑业向建筑业信息化转变，打破信息壁垒和“孤岛”也是摆在建筑行业的首要任务。', '国务院常务会议通过的《“十三五”国家信息化规划》，规划的重点之一就是打破信息壁垒和“孤岛”，构建统一高效、互联互通、安全可靠的国家数据资源体系。为迎合信息时代的发展，实现传统建筑业向建筑业信息化转变，打破信息壁垒和“孤岛”也是摆在建筑行业的首要任务。<br>\n脉云创新的内容管理服务，助力建筑行业信息化转型，促进企业之间的信息跨平台自动交换与共享，开启工程建筑行业信息化新纪元。', 'construction.png', '', 4, '2017-04-19 13:55:29', '', ''),
(2, '教育', '构建网络化、数字化、个性化、终身化的教育体系已成为信息时代教育发展的显著特点。为了促进教育信息化建设，教育部印发的《2017年教育信息化工作要点》指出未来教育要建设成“人人皆学、处处能学、时时可学”的学习型社会，充分发挥教育信息化对教育现代化的支撑和引领作用。教育信息化面临着政策性和历史性的双重发展机遇。', '构建网络化、数字化、个性化、终身化的教育体系已成为信息时代教育发展的显著特点。为了促进教育信息化建设，教育部印发的《2017年教育信息化工作要点》指出未来教育要建设成“人人皆学、处处能学、时时可学”的学习型社会，充分发挥教育信息化对教育现代化的支撑和引领作用。教育信息化面临着政策性和历史性的双重发展机遇。<br>脉云致力于教育信息化建设，助力于国家教育资源公共服务平台与省级平台及一批市县级平台、企业平台互联互通，提高教育教学质量。', 'education.png', '', 4, '2017-04-19 13:37:26', '', ''),
(3, '医疗', '医疗卫生事业关系着人民的健康生活，也是维持社会稳定和发展的基本要素。国家卫生计生委副主任金小桃指出，2017年要加快推进全民健康信息化“三项建设”。随着时代的发展，信息化已经成了推动医疗卫生行业实现战略转变的重要力量。', '医疗卫生事业关系着人民的健康生活，也是维持社会稳定和发展的基本要素。国家卫生计生委副主任金小桃指出，2017年要加快推进全民健康信息化“三项建设”。随着时代的发展，信息化已经成了推动医疗卫生行业实现战略转变的重要力量。<br>脉云助力于全民健康信息平台建设，促进国家与省级全民健康信息平台及委属委管医院互联互通工作，为引领健康医疗事业产业发展打下扎实基础。', 'medical.png', '', 4, '2017-04-19 13:50:54', '', ''),
(4, '我国人工智能市场规模快速增长预计2018年将达到381亿', ' 人工智能已经遍布我们的生活，并且在很大程度上影响了我们的生活方式。2016年中国人工智能市场规模快速增长，全年超过230亿元，预计2018年将达到381亿元，复合增长率达26.3%。在未来，人工智能将通过推动自动驾驶汽车的发展、改善医学图像分析、促进更好的医疗诊断和个性化医疗，给社会带来重大转变。人工智能 也将是支撑未来许多最具创新应用和服务的基本架构。', '人工智能已经遍布我们的生活，并且在很大程度上影响了我们的生活方式。2016年中国人工智能市场规模快速增长，全年超过230亿元，预计2018年将达到381亿元，复合增长率达26.3%。在未来，人工智能将通过推动自动驾驶汽车的发展、改善医学图像分析、促进更好的医疗诊断和个性化医疗，给社会带来重大转变。人工智能 也将是支撑未来许多最具创新应用和服务的基本架构。<br>与此同时，随着存储、计算、虚拟现实、大数据、人工智能等技术交叉融合，未来十几年后数字经济将形成全新的产业生态。国家 " 十三五 " 发展规划中十四大战略之一的 " 大数据战略 "，影响着各个行业，创造了巨大的商业价值。通过结合大数据和云计算技术，人工智能将更好地服务于人们生活，推动时代进步。<br>巨大数据量为人工智能提供了发展空间，从早期的支持向量机、决策树，到近期的人工智能神经网络，数据越多越有助于人工智能的发展。同时，大数据也需要更新的模式来处理它，通过这个过程发现更多隐含规律。所以大数据和人工智能的结合，相辅相成，也是必然趋势。据 IDC 等公司预测，到 2019 年全球大数据技术和服务市场规模将接近 500 亿美元，CAGR 超过 20％；另据易观智库预测，2015 年国内大数据市场规模已达到 105.5 亿元，未来 3 年增速将保持在 35％左右，整个行业维持较高景气度。', 'ai.png', '', 5, '2017-04-19 13:54:29', '', ''),
(5, '工信部：2019年我国云计算产业规模达4300亿', '工业和信息化部近日印发的《云计算发展三年行动计划（2017-2019年）》提出，到2019年，我国云计算产业规模达到4300亿元，建立云计算公共服务平台，支持软件企业向云计算加速转型，加大力度培育云计算骨干企业，建立产业生态体系。', '工业和信息化部近日印发的《云计算发展三年行动计划（2017-2019年）》提出，到2019年，我国云计算产业规模达到4300亿元，建立云计算公共服务平台，支持软件企业向云计算加速转型，加大力度培育云计算骨干企业，建立产业生态体系。<br>经过近10年的发展，云计算已从概念导入进入广泛普及、应用繁荣的新阶段，已成为提升信息化发展水平、打造数字经济新动能的重要支撑。近日发布的《2016年度中国云服务及云存储市场分析报告》显示，2016年，中国云服务市场规模超过500亿元，达到516.6亿元，预计2017年中国云计算市场份额将达到690亿元以上。云计算产业增长速度同样很快，工信部2月份公布的数据显示，“十二五”期间，我国云计算产业年均增长率超过30%，截至2015底已达到约1500亿元。<br>云计算正释放巨大红利，其应用逐步从互联网行业向制造、金融、交通、医疗健康、广电等传统行业渗透和融合，促进了传统行业的转型升级。“云的建设将来要和各行各业结合，比如工业云，要将工业各个环节都搬到网上去，就需要信息化、软件化，大中小企业都有机会。”李广乾表示，对于中小企业来说，关键要找准技术领域和方向，可以围绕云计算发展的具体领域做布局。\n<br>“行动计划”中还明确了产业发展行动：<br>一、支持软件企业向云计算转型。支持地方主管部门联合云计算骨干企业建立面向云计算开发测试的公共服务平台，提供咨询、培训、研发、商务等公共服务。支持软件和信息技术服务企业基于开发测试平台发展产品、服务和解决方案，加速向云计算转型，丰富完善办公、生产管理、财务管理、营销管理、人力资源管理等企业级SaaS服务，发展面向个人信息存储、家居生活、学习娱乐的云服务，培育信息消费新热点。<br>二、加快培育骨干龙头企业。面向重点行业领域创新发展需求，加大资金、信贷、人才等方面支持力度，加快培育一批有一定技术实力和业务规模、创新能力突出、市场前景好、影响力强的云计算企业及云计算平台。支持骨干龙头企业丰富服务种类，提高服务能力，创新商业模式，打造生态体系，推动形成云计算领域的产业梯队，不断增强我国在云计算领域的体系化发展实力。<br>三、推动产业生态体系建设。建设一批云计算领域的新型工业化产业示范基地，完善产业载体建设。依托产业联盟等行业组织，充分发挥骨干云计算企业的带动作用和技术溢出效应，加快云计算关键设备研发和产业化，引导芯片、基础软件、服务器、存储、网络等领域的企业，在软件定义网络、新型架构计算设备、超融合设备、绿色数据中心、模块化数据中心、存储设备、信息安全产品等方面实现技术与产品突破，带动信息产业发展，强化产业支撑能力。大力发展面向云计算的信息系统规划咨询、方案设计、系统集成和测试评估等服务。', 'cloudcomputing.png', NULL, 5, NULL, NULL, NULL),
(6, '脉云CEO李富强访问中科院兰州文献情报中心', '近日，脉云CEO李富强访问了中科院兰州文献情报中心，双方就共建语义化知识管理实验室进行洽谈。', '近日，脉云CEO李富强访问了中科院兰州文献情报中心，双方就共建语义化知识管理实验室进行洽谈。在愉快的氛围中，双方就多领域问题达成共识。脉云多年来行业发展的市场优势与内容管理领域的技术积累，加上中科院兰州文献情报中心理论研究方面的优势，相信在双方的精诚合作与努力之下，语义化知识管理实验室将会建设的更加美好。<br>\n\n关于中国科学院兰州文献情报中心\n\n<br>兰州文献情报中心作为现代科技信息和知识集成服务与资源环境科技战略研究与决策咨询服务机构，是中国科学院现代文献情报知识咨询服务体系的主要组成部分之一，是中国科学院建设的国家科学思想库的有机组成部分之一，是国家现代科技文献情报知识服务体系的重要组成部分。兰州文献情报中心是国家科技图书文献中心（NSTL）兰州镜像站点单位。2009年建成为中国全球变化研究信息中心。兰州文献情报中心现已成为区域内最大的综合性文献情报中心和国内一流的知识服务和科技战略研究与决策咨询机构。', 'CASLanzhou.png', '', 23, '2017-03-23 12:33:49', '', ''),
(7, '内容管理解决方案', '脉云企业内容管理方案和产品可以更有效地捕获各类的信息（包括结构化和非结构化信息），并在多种应用程序，平台或过程的上下文中提供。通过安全访问来自任何设备或位置的信息，您可以确保您的员工拥有他们所需的信息，时间和方式，以及他们的工作和工作更有效。这些产品减少了查找关键业务信息所需的时间，显着提高了生产力，同时还提供了更丰富的用户体验。', '&lt;h3 style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;&lt;strong&gt;适用领域：&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;建筑业、制造业、医疗、教育、政务、金融、咨询服&lt;/span&gt;&lt;/p&gt;&lt;h3 style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;&lt;br/&gt;业务需求&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;今天，企业的内容信息以指数速度快速增长，内容呈现形式和载体更加多元化，企业级内容管理面临着多方面的挑战，具体体现在内容捕获、安全管控、内容查找、版本控制及多人协作方面存在诸多困难：&lt;/span&gt;&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot; style=&quot;list-style-type: disc;&quot;&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;多渠道内容捕获困难：大部分企业拥有包括OA、ERP、CRM、邮件、电子文档、印刷文档等多种形式的内容资料，各系统模块之间信息不共享造成同一个体内容在多个系统中重复初现并且版本不一致的情况，大大降低了企业信息的有效性和及时性；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;内容安全挑战：格式各异的内容分布在不同的系统，不同的人员手中，由于岗位变动、人员离职和商业窃密等问题造成的内容安全挑战是企业领导最关心的问题之一；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;内容查找困难：95%以上的企业面临内容分散导致的版本遗失、查找困难等问题，直接和简介经济损失巨大；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;协作及版本控制问题：图纸、合同、方案等内容的产生需要多人协作，并会随之产生多种版本，无序的管理会让版本混乱，协作效率降低；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;归档和数字资产管理问题：阶段性的数字工作成果归档和管理是企业知识积累的基础，良好而完善的数字资产是企业的核心竞争力；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h3 style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;&lt;br/&gt;解决方案&lt;/span&gt;&lt;/h3&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;脉云企业内容管理方案和产品可以更有效地捕获各类的信息（包括结构化和非结构化信息），并在多种应用程序，平台或过程的上下文中提供。通过安全访问来自任何设备或位置的信息，您可以确保您的员工拥有他们所需的信息，时间和方式，以及他们的工作和工作更有效。这些产品减少了查找关键业务信息所需的时间，显着提高了生产力，同时还提供了更丰富的用户体验。&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot; style=&quot;list-style-type: disc;&quot;&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;脉云提供便于扩展的多层次API，支持多系统的主动和被动集成，并提供完善的定制开发和开发者培训服务，帮助更多的企业实现多系统集成，内容统一管控，实现全方位的内容捕获；&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;脉云提供数据、代码、应用、网络四级内容安全管控方案，可以有效的管控内容生产、传输、使用和消耗全过程的信息安全；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;脉云提供统一智能的内容索引和查找方案，可以为任何工作场景的内容获取需求找到最佳的推荐内容匹配方案；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;脉云提供基于电子文档的多人协作和版本控制功能，使得各类企业和团队可以有效的开展基于电子文档的工作协同和版本管控；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p style=&quot;line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &quot; microsoft=&quot;&quot;&gt;脉云提供完善的数字资产归档和管控方案，便于企业实现安全高效的数字资产管理和应用工作；&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;', 'CMS.png', '', 7, '2017-03-23 12:45:59', '', ''),
(8, '业务流程解决方案', '脉云BPM全面流程管理解决方案构建在自主研发的Maiunsoft业务流程基础中间平台之上，采用业界开放性技术与工业标准，能够成为企业SOA架构战略不可或缺的流程基础设施。Maiunsoft BPM涵盖了对流程的梳理、建模、集成、运行、监控、分析、优化的全周期管理。', '适用领域：<br>建筑业、制造业、医疗、教育、政务、金融、咨询服务\n\n\n<br>业务需求\n<br>\n随着企业的组织架构越来越复杂，给企业管理带来了巨大挑战。企业在发展过程中建立了诸多制度和流程，但执行力却没有提高。要解决这个问题，应用BPM（业务流程管理）系统是一个可行的途径。BPM全称为Business Process Management，即业务流程管理。它是SOA的重要组件，是串联各系统业务流程的桥梁。 它以业务流程为中心，协调业务目标和执行，推进人与人之间、人与系统之间以及系统与系统之间的整合及调整对业务流程进行自动化，并通过流程的分析及监控功能，对业务进行整合及计量，从业务角度、组织角度、IT角度都可得到可量化的改善效果。\n<br>\n\n解决方案\n\n<br>脉云BPM全面流程管理解决方案构建在自主研发的Maiunsoft业务流程基础中间平台之上，采用业界开放性技术与工业标准，能够成为企业SOA架构战略不可或缺的流程基础设施。Maiunsoft BPM涵盖了对流程的梳理、建模、集成、运行、监控、分析、优化的全周期管理。在Maiunsoft BPM平台中，没有耗时的编码也没有流程实施的延误，更没有昂贵的调整优化成本，炎黄盈动提供了最直接和最易用的工具来支持企业管理与IT的创新。新一代业务流程管理平台\n<br>\n1.为流程、业务专家提供基于“业务语言”的流程梳理工具，提供了国际通用的建模符号\n<br>\n2.为实施专家提供可视化的“零代码”业务建模平台，快速实施个性化的流程应用<br>3.为运维专家提供丰富运维工具和可伸缩性部署方案\n<br>4.为内审专员提供合规遵循、数据及安全审计\n<br>5.为经营管理者提供流程绩效看板\n<br>\n6.为最终用户提供简洁、高效的工作门户', 'operationflow.png', '', 8, '2017-03-23 12:46:36', '', ''),
(9, '脉云助力CCDI悉地国际打造项目管理平台', '脉云基于客户需求打造的项目管理平台，平台功能主要涵盖：用户管理、项目管理、团队管理、权限管理、文件管理、问题管理、通知管理、Aconex集、ProjectWise集成和大象云三维引擎集成。该平台可以对多个项目进行管理，多个团队可以基于一个项目进行工作协同。', '客户简介<br>公司背景：CCDI悉地国际创立于1994年，是在世界城市建设和开发领域从事综合专业服务的大型工程实践咨询机构。其业务涵盖广泛的行业与不同的专业领域。CCDI曾成功主持设计了国家游泳中心（水立方）、大梅沙·万科中心、深圳腾讯大厦、阿里巴巴深圳大厦、深圳百度国际大厦等各类型知名项目。<br>\n\n客户需求<br>\n为避免在建筑设计阶段由于许多专业间协同问题、规范问题、业主要求等因素产生影响设计质量甚至影响后期施工的问题，CCDI委托脉云软件（上海）有限公司开发基于BIM问题跟踪的项目管理平台。<br>\n\n解决方案\n<br>脉云基于客户需求打造的项目管理平台，平台功能主要涵盖：用户管理、项目管理、团队管理、权限管理、文件管理、问题管理、通知管理、Aconex集、ProjectWise集成和大象云三维引擎集成。该平台可以对多个项目进行管理，多个团队可以基于一个项目进行工作协同。<br>\n\n\n\n客户收益<br>\nCCDI悉地国际项目管理平台的建成可支持千余人同时在线工作，有效地解决了项目集中管理的问题和多人开展项目工作协同的问题。该平台支持问题的创建、审核、发布，完全替代线下的问题跟踪流程，将问题进行集中存储，实现多人在云端的高效协作。平台还支持通过问题专业、重要程度、问题类型等多个维度对问题进行筛选，支持导出项目问题报告作为给业主的交付成果。', 'CCDI.png', '', 12, '2017-03-23 15:59:23', '', ''),
(10, '脉云软件（上海）有限公司', '脉云软件（上海）有限公司简称脉云软件(或Maiunsoft)成立于2014年，以聚焦数字世界，服务现代生活为使命，致力于打造企业可信赖的内容管理解决方案服务商，我们为客户输出安全、便捷、高效的内容管理工具和方法论。', '  今天，随着科技的飞速发展，海量的信息和安全威胁为企业带来较大的压力，如何将结构各异、杂乱无序的内容信息进行充分收集、整理并实现安全、可靠、高效的管控利用是大部分企业面临的难题，能够管控并利用好信息也成为企业的核心竞争力，更是关系的企业能否可持续发展的重要因素。<br>\n  脉云软件（上海）有限公司简称脉云软件(或Maiunsoft)成立于2014年，以聚焦数字世界，服务现代生活为使命，致力于打造企业可信赖的内容管理解决方案服务商，我们为客户输出安全、便捷、高效的内容管理工具和方法论。成立以来，我们持续性的专注研发，一方面为行业级客户开发内容管理方法论，另一方面，以脉云智库为核心，为客户提供内容管理云平台，帮助客户实现随时、随地、安全、高效的内容管理和协同。同时，我们持续性的关注并研究人工智能、大数据技术在内容管理领域的应用，在内容安全管控、自动聚类、机器学习和场景化推荐等领域取得了突破性进展，取得了国内领先的技术成果。<br>\n  脉云的提出源自于我们对做事方法的理解，脉，犹如水流源源不断者，意味着做任何事情都贵在坚持，另一方面，脉有关键点的意思，意味着做事情需要抓住重点，要有化繁为简的，切中要害的工作思路。脉云的产生是致力于构建全球顶级内容云平台的战略构想；我们的信心来自于对于行业需求的洞察和新技术生产力的深刻理解，脉云的动力来自于大量客户的信赖和企业转型升级的服务需求。<br>\n  当前，脉云已经在多个领域积累了较多的客户案例，并切身以实际行动践行客户第一的理念。未来，我们将一如既往的推动内容管理领域的技术积累，持续性的以客户需求为导向、技术为驱动、服务为载体，携手更多客户实现梦想。<br>', 'companyprofile.png', NULL, 19, NULL, NULL, NULL),
(11, '企业文化', '需求牵引、技术驱动、用户第一、体验为王是公司的核心价值观。传承、创新、持续、发展是公司文化的精髓。', '需求牵引、技术驱动、用户第一、体验为王是公司的核心价值观。传承、创新、持续、发展是公司文化的精髓。', NULL, NULL, 22, '2017-04-18 21:20:15', NULL, NULL),
(38, '', NULL, '&lt;p&gt;&amp;nbsp; &amp;nbsp; 近日，脉云CEO李富强访问了中科院兰州文献情报中心，双方就共建语义化知识管理实验室进行洽谈。在愉快的氛围中，双方就多领域问题达成共识。脉云多年来行业发展的市场优势与内容管理领域的技术积累，加上中科院兰州文献情报中心理论研究方面的优势，相信在双方的精诚合作与努力之下，语义化知识管理实验室将会建设的更加美好。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;strong&gt;关于中国科学院兰州文献情报中心&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&amp;nbsp; &amp;nbsp; 兰州文献情报中心作为现代科技信息和知识集成服务与资源环境科技战略研究与决策咨询服务机构，是中国科学院现代文献情报知识咨询服务体系的主要组成部分之一，是中国科学院建设的国家科学思想库的有机组成部分之一，是国家现代科技文献情报知识服务体系的重要组成部分。兰州文献情报中心是国家科技图书文献中心（NSTL）兰州镜像站点单位。2009年建成为中国全球变化研究信息中心。兰州文献情报中心现已成为区域内最大的综合性文献情报中心和国内一流的知识服务和科技战略研究与决策咨询机构。&lt;/p&gt;', NULL, NULL, NULL, '2017-04-19 18:36:16', NULL, NULL),
(39, '', NULL, '&lt;p&gt;近日，脉云CEO李富强访问了中科院兰州文献情报中心，双方就共建语义化知识管理实验室进行洽谈。在愉快的氛围中，双方就多领域问题达成共识。脉云多年来行业发展的市场优势与内容管理领域的技术积累，加上中科院兰州文献情报中心理论研究方面的优势，相信在双方的精诚合作与努力之下，语义化知识管理实验室将会建设的更加美好。&lt;br/&gt;&lt;strong&gt;关于中国科学院兰州文献情报中心&lt;/strong&gt;&lt;br/&gt;兰州文献情报中心作为现代科技信息和知识集成服务与资源环境科技战略研究与决策咨询服务机构，是中国科学院现代文献情报知识咨询服务体系的主要组成部分之一，是中国科学院建设的国家科学思想库的有机组成部分之一，是国家现代科技文献情报知识服务体系的重要组成部分。兰州文献情报中心是国家科技图书文献中心（NSTL）兰州镜像站点单位。2009年建成为中国全球变化研究信息中心。兰州文献情报中心现已成为区域内最大的综合性文献情报中心和国内一流的知识服务和科技战略研究与决策咨询机构。&lt;/p&gt;', NULL, NULL, NULL, '2017-04-19 18:37:01', NULL, NULL),
(40, '', NULL, '&lt;p&gt;近日，脉云CEO李富强访问了中科院兰州文献情报中心，双方就共建语义化知识管理实验室进行洽谈。在愉快的氛围中，双方就多领域问题达成共识。脉云多年来行业发展的市场优势与内容管理领域的技术积累，加上中科院兰州文献情报中心理论研究方面的优势，相信在双方的精诚合作与努力之下，语义化知识管理实验室将会建设的更加美好。&lt;br/&gt;关于中国科学院兰州文献情报中心&lt;br/&gt;文献情报中心作为现代科技信息和知识集成服务与资源环境科技战略研究与决策咨询服务机构，是中国科学院现代文献情报知识咨询服务体系的主要组成部分之一，是中国科学院建设的国家科学思想库的有机组成部分之一，是国家现代科技文献情报知识服务体系的重要组成部分。兰州文献情报中心是国家科技图书文献中心（NSTL）兰州镜像站点单位。2009年建成为中国全球变化研究信息中心。兰州文献情报中心现已成为区域内最大的综合性文献情报中心和国内一流的知识服务和科技战略研究与决策咨询机构。&lt;/p&gt;', NULL, NULL, NULL, '2017-04-19 18:37:29', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `bref` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `bref`, `type`, `image`) VALUES
(4, '业务洞察', 'fff', 1, 'medical.jpg'),
(5, '技术前沿', '', 1, NULL),
(7, '企业内容管理', '', 2, NULL),
(8, '业务流程管理', '', 2, NULL),
(12, '建筑行业', '', 3, '58d467f418e41.png'),
(13, '贸易行业', '', 3, '58d4680cc32a6.png'),
(14, '战略伙伴 SP', '', 4, NULL),
(15, '市场伙伴 MP', '', 4, NULL),
(16, '技术伙伴 TP', '', 4, NULL),
(19, '公司简介', '', 5, '58d383554d5a3.png'),
(22, '企业文化', '', 5, '58d383554d5a3.png'),
(23, '公司动态', '', 1, NULL),
(24, '定制开发服务', '', 2, NULL),
(25, '培训顾问服务', '', 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '岗位名称',
  `type` int(11) DEFAULT NULL COMMENT '工作类型',
  `work_city` int(11) DEFAULT NULL COMMENT '工作城市',
  `work_content` text COLLATE utf8_bin COMMENT '工作内容',
  `requirements` text COLLATE utf8_bin COMMENT '任职条件',
  `work_age` int(2) DEFAULT NULL COMMENT '工作年限',
  `update_time` datetime DEFAULT NULL,
  `urgency` int(1) DEFAULT NULL,
  `salary_scope` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_job`
--

INSERT INTO `tbl_job` (`id`, `name`, `type`, `work_city`, `work_content`, `requirements`, `work_age`, `update_time`, `urgency`, `salary_scope`) VALUES
(8, '销售助理', 3, 1, '1、面试成功由专业团队进行二轮带薪培训<br>\n2、正式录用后享有完整销售人员进阶培训资质<br>\n3、巨大的成长空间，高额项目加分奖金<br>\n4、弹性工作，无打卡考勤，不需自己拉客户跟着团队发展进步', '', 2, '2017-04-19 15:16:53', 1, '面议'),
(9, '咨询顾问', 3, 1, '	1、本科及以上学历，计算机、信息管理或相关专业<br> 2、3年以上建筑|制造|医疗|教育等任一领域系统设计咨询经验<br> 3、熟悉招投标程序，进行现场答疑和讲标<br> 4、具备敏捷活跃的思维以及优秀的文字撰写能力，有咨询顾问相关工作经历者优先', '	1、负责向用户进行专业咨询工作 <br>2、编写整理专业咨询相关文档<br>3、为内部客户提供专业的培训<br>4、研究用户行业，挖掘潜在需求 <br>5、协助开展品牌营销和市场拓展工作', 2, '2017-04-19 15:23:18', 2, '面议'),
(10, 'C#工程师', 2, 1, '1、负责C#语言软件（客户端）的开发工作<br>\n2、参与C#开发体系的构建', '1、普通大学本科及以上学历，计算机专业优先<br>\n2、良好的专业基本功、编程思维和编程系统<br>\n3、有C#开发经验者优先<br>\n4、有良好的学习能力和团队协作能力，可以与创业团队一起工作', 2, '2017-04-19 15:16:28', 3, '面议'),
(11, '上海技术经理', 5, 1, '1、带领技术团队完成公司项目开发<br>\n2、负责公司技术路线和标准制定<br>\n\n3、负责现有项目的技术维护工作\n', '1、普通大学本科及以上学历，计算机专业优先<br>\n2、良好的专业基本功、编程思维和编程系统<br>\n3、有C#开发经验者优先<br>\n4、有良好的学习能力和团队协作能力，可以与创业团队一起工作', 2, '2017-04-19 15:16:08', 3, '年薪18万+股权+补贴'),
(12, '高级商务助理', 3, 1, '1、协助CEO对接意向客户需求，商务洽谈，办理商务具体事务<br>\n2、跟客户对接具体内容合同，跟进项目进度，协调各方完成项目<br>\n3、维护客户及合作伙伴关系', '1、大学本科及以上学历，3年及以上商务工作经验<br>\n2、良好的沟通表达及协调能力，能很好的维护人际关系<br>\n3、可以较为熟练的撰写商务文件，熟悉商务工作规则\n<br>4、有IT行业商务工作经验者优先', 2, '2017-04-19 15:29:14', 3, '面议'),
(14, '北京技术经理', 5, 2, '1、带领技术团队完成公司项目开发<br>\r\n2、负责公司技术路线和标准制定<br>\r\n\r\n3、负责现有项目的技术维护工作\r\n', '1、普通大学本科及以上学历，计算机专业优先<br>\r\n2、良好的专业基本功、编程思维和编程系统<br>\r\n3、有C#开发经验者优先<br>\r\n4、有良好的学习能力和团队协作能力，可以与创业团队一起工作', 2, '2017-04-19 15:16:08', 3, '年薪18万+股权+补贴'),
(15, '广州技术经理', 5, 3, '1、带领技术团队完成公司项目开发<br>\r\n2、负责公司技术路线和标准制定<br>\r\n\r\n3、负责现有项目的技术维护工作\r\n', '1、普通大学本科及以上学历，计算机专业优先<br>\r\n2、良好的专业基本功、编程思维和编程系统<br>\r\n3、有C#开发经验者优先<br>\r\n4、有良好的学习能力和团队协作能力，可以与创业团队一起工作', 2, '2017-04-19 15:16:08', 3, '年薪18万+股权+补贴'),
(16, '兰州技术经理', 5, 4, '1、带领技术团队完成公司项目开发<br>\r\n2、负责公司技术路线和标准制定<br>\r\n\r\n3、负责现有项目的技术维护工作\r\n', '1、普通大学本科及以上学历，计算机专业优先<br>\r\n2、良好的专业基本功、编程思维和编程系统<br>\r\n3、有C#开发经验者优先<br>\r\n4、有良好的学习能力和团队协作能力，可以与创业团队一起工作', 2, '2017-04-19 15:16:08', 3, '年薪18万+股权+补贴');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_bin NOT NULL,
  `bref` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `create_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `bref`, `image`, `type`, `url`, `create_time`) VALUES
(1, '实现前所未有的突破', '2017年 3月 11、 12日, 在紧张刺激的48小时中，实现区块链技术的 创新商业应用，', 'dynamic1.jpg', 2, 'http://www.baidu.com', '2017-03-23 16:18:56'),
(2, '安全威胁日益增多？', '通过将可靠的基础管控、智能报告和管理工具进行独特的组合，立即开启您的云端之旅。', 'dynamic2.jpg', 2, '', '2017-03-23 16:17:04'),
(3, '轻松上云端', 'Mainun Connect 系列产品助您连接云端，探索洞察力，应对数据挑战。 拨打免费咨询', 'dynamic3.jpg', 2, '', '2017-03-23 16:16:42'),
(4, '建筑', '国务院常务会议通过的《“十三五”国家信息化规划》，规划的重点之一就是打破信息壁垒和“孤岛”，构建统一高效、互联互通、安全', 'construction.jpg', 3, 'http://www.maiunsoft.com/index.php/article/detail/id/1.html', '2017-03-23 16:31:03'),
(5, '医疗', '医疗卫生事业关系着人民的健康生活，也是维持社会稳定和发展的基本要素。国家卫生计生委副主任金小桃指出，2017年要加快推进', 'medical.jpg', 3, 'http://www.maiunsoft.com/index.php/article/detail/id/3.html', '2017-03-23 16:28:53'),
(6, '教育', '构建网络化、数字化、个性化、终身化的教育体系已成为信息时代教育发展的显著特点。为了促进教育信息化建设，教育部印发的《20', 'education.jpg', 3, 'http://www.maiunsoft.com/index.php/article/detail/id/2.html', '2017-03-23 16:29:12'),
(8, '滚动图1', '', 'roll1.png', 1, '', '2017-03-23 16:11:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- 使用表AUTO_INCREMENT `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="shortcut icon" href="/images/favicon.png">
    <meta name="googlebot" content="noindex"/>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"/>
    <link rel="stylesheet" href="/style/dhtmlwindow.css" type="text/css"/>
    <script type="text/javascript" src="/script/dhtmlwindow.js">
        /***********************************************
         * DHTML Window Widget- � Dynamic Drive (www.dynamicdrive.com)
         * This notice must stay intact for legal use.
         * Visit www.dynamicdrive.com for full source code
         ***********************************************/
    </script>
    <link rel="stylesheet" href="/style/modal.css" type="text/css"/>
    <script type="text/javascript" src="/script/modal.js"></script>
    <script type="text/javascript">
        function show_popup(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + 'px';
            var heightpx = height + 'px';
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',center=1,resize=0,scrolling=1');
        }

        function show_modal(popup_name, popup_url, popup_title, width, height) {
            var widthpx = width + 'px';
            var heightpx = height + 'px';
            emailwindow = dhtmlmodal.open(popup_name, 'iframe', popup_url, popup_title, 'width=' + widthpx + ',height=' + heightpx + ',modal=1,center=1,resize=0,scrolling=1');
        }

        var popUpWin = 0;

        function popUpWindow(URLStr, PopUpName, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            var left = (screen.width - width) / 2;
            var top = (screen.height - height) / 2;
            popUpWin = open(URLStr, PopUpName, 'toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,copyhistory=yes,width=' + width + ',height=' + height + ',left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style type="text/css">
        /*** BMEMBF Start ***/
        /* CMS V4 Editor Test */
        [name=bmeMainBody] {
            min-height: 1000px;
        }
        @media only screen and (max-width: 480px) {
            table.blk, table.tblText, .bmeHolder, .bmeHolder1, table.bmeMainColumn {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable td.tblCell {
                padding: 0px 20px 20px 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td.tblCell {
                padding: 20px 20px 0 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable td.tblCell {
                padding: 10px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.tblGtr {
                padding-bottom: 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td.blk_container, .blk_parent, .bmeLeftColumn, .bmeRightColumn, .bmeColumn1, .bmeColumn2, .bmeColumn3, .bmeBody {
                display: table !important;
                max-width: 600px !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.container-table, .bmeheadertext, .container-table {
                width: 95% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .mobile-footer, .mobile-footer a {
                font-size: 13px !important;
                line-height: 18px !important;
            }
            .mobile-footer {
                text-align: center !important;
            }
            table.share-tbl {
                padding-bottom: 15px;
                width: 100% !important;
            }
            table.share-tbl td {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td.bmeShareTD, td.bmeSocialTD {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td.tdBoxedTextBorder {
                width: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            th.tdBoxedTextBorder {
                width: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.blk, table[name=tblText], .bmeHolder, .bmeHolder1, table[name=bmeMainColumn] {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable td[name=tblCell] {
                padding: 0px 20px 20px 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td[name=tblCell] {
                padding: 20px 20px 0 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable td[name=tblCell] {
                padding: 10px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table[name=tblGtr] {
                padding-bottom: 20px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td.blk_container, .blk_parent, [name=bmeLeftColumn], [name=bmeRightColumn], [name=bmeColumn1], [name=bmeColumn2], [name=bmeColumn3], [name=bmeBody] {
                display: table !important;
                max-width: 600px !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table[class=container-table], .bmeheadertext, .container-table {
                width: 95% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .mobile-footer, .mobile-footer a {
                font-size: 13px !important;
                line-height: 18px !important;
            }
            .mobile-footer {
                text-align: center !important;
            }
            table[class="share-tbl"] {
                padding-bottom: 15px;
                width: 100% !important;
            }
            table[class="share-tbl"] td {
                display: block !important;
                text-align: center !important;
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td[name=bmeShareTD], td[name=bmeSocialTD] {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td[name=tdBoxedTextBorder] {
                width: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            th[name=tdBoxedTextBorder] {
                width: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeImageCard table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 20px !important;
                clear: both;
                float: left !important;
                border-collapse: separate;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeImageTable {
                height: auto !important;
                width: 100% !important;
                padding: 10px !important;
                clear: both;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeCaptionTable {
                width: 100% !important;
                clear: both;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeImageContainer {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.bmeImageTable td {
                padding: 0px !important;
                height: auto;
            }
        }
        @media only screen and (max-width: 480px) {
            img.mobile-img-large {
                width: 100% !important;
                height: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            img.bmeRSSImage {
                max-width: 320px;
                height: auto !important;
            }
        }
        @media only screen and (min-width: 640px) {
            img.bmeRSSImage {
                max-width: 600px !important;
                height: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .trMargin img {
                height: 10px;
            }
        }
        @media only screen and (max-width: 480px) {
            div.bmefooter, div.bmeheader {
                display: block !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdPart {
                width: 100% !important;
                clear: both;
                float: left !important;
            }
        }
        @media only screen and (max-width: 480px) {
            table.blk_parent1, table.tblPart {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tblLine {
                min-width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblCenter img {
                margin: 0 auto;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblCenter, .bmeMblCenter div, .bmeMblCenter span {
                text-align: center !important;
                text-align: -webkit-center !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeNoBr br, .bmeImageGutterRow, .bmeMblStackCenter .bmeShareItem .tdMblHide {
                display: none !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable, .bmeMblInline table.bmeCaptionTable, .bmeMblInline {
                clear: none !important;
                width: 50% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblInlineHide, .bmeShareItem .trMargin {
                display: none !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblInline table.bmeImageTable img, .bmeMblShareCenter.tblContainer.mblSocialContain, .bmeMblFollowCenter.tblContainer.mblSocialContain {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStack > .bmeShareItem {
                width: 100% !important;
                clear: both !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeShareItem {
                padding-top: 10px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdPart.bmeMblStackCenter, .bmeMblStackCenter .bmeFollowItemIcon {
                padding: 0px !important;
                text-align: center !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter > .bmeShareItem {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            td.bmeMblCenter {
                border: 0 none transparent !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeLinkTable.tdPart td {
                padding-left: 0px !important;
                padding-right: 0px !important;
                border: 0px none transparent !important;
                padding-bottom: 15px !important;
                height: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdMblHide {
                width: 10px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeShareItemBtn {
                display: table !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStack td {
                text-align: left !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStack .bmeFollowItem {
                clear: both !important;
                padding-top: 10px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItemText {
                padding-left: 5px !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .bmeMblStackCenter .bmeFollowItem {
                clear: both !important;
                align-self: center;
                float: none !important;
                padding-top: 10px;
                margin: 0 auto;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdPart > table {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdPart > table.bmeLinkContainer {
                width: auto !important;
            }
        }
        @media only screen and (max-width: 480px) {
            .tdPart.mblStackCenter > table.bmeLinkContainer {
                width: 100% !important;
            }
        }
        .blk_parent:first-child, .blk_parent {
            float: left;
        }
        .blk_parent:last-child {
            float: right;
        }
        /*** BMEMBF END ***/
    </style>
    <!--[if gte mso 9]>
    <xml>
        96
    </xml>
    <![endif]-->
</head>
<body topmargin="0" leftmargin="0"
      style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;min-width: 100%;">
<img
    src='/c/o?e=17AEEC3&c=91CEA&t=1&email=TIdS9%2B05Aas%3D&relid=' alt='' border="0" style="display:none;" height="1"
    width="1">
<table width="100%" cellspacing="0" cellpadding="0" border="0" name="bmeMainBody"
       style="background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
    <tbody>
    <tr>
        <td width="100%" valign="top" align="center">
            <table cellspacing="0" cellpadding="0" border="0" name="bmeMainColumnParentTable">
                <tbody>
                <tr>
                    <td name="bmeMainColumnParent" style="border-collapse: separate;">
                        <table name="bmeMainColumn" class="bmeHolder bmeMainColumn"
                               style="max-width: 600px; overflow: visible;" cellspacing="0" cellpadding="0" border="0"
                               align="center">
                            <tbody>
                            <tr>
                                <td width="100%" class="bmeHolder" valign="top" align="center"
                                    name="bmeMainContentParent"
                                    style="border-color: rgb(128, 128, 128); border-radius: 5px; border-collapse: separate; border-spacing: 0px;">
                                    <table name="bmeMainContent"
                                           style="border-radius: 5px; border-collapse: separate;border-spacing: 0px; overflow: hidden;"
                                           width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                        <tr id="section_2" class="flexible-section" data-columns="1">
                                            <td width="100%" class="blk_container bmeHolder" name="bmeHeader"
                                                valign="top" align="center" bgcolor="#ffefe9"
                                                style="background-color: rgb(255, 239, 233);">
                                                <div id="dv_1" class="blk_wrapper" style="">
                                                    <table class="blk" name="blk_image" width="600" border="0"
                                                           cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <table width="100%" cellspacing="0" cellpadding="0"
                                                                       border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="bmeImage"
                                                                            style="padding: 0px; border-collapse: collapse;"
                                                                            align="center"><img
                                                                                src="https://i.ibb.co/Mcvx833/Lilac-floral-shower-invite.png"
                                                                                class="mobile-img-large" width="250"
                                                                                style="max-width: 1000px; display: block; border-radius: 0px;"
                                                                                alt="" data-radius="0" border="0"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="dv_11" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_divider"
                                                           style="background-color: rgb(255, 255, 255);">
                                                        <tbody>
                                                        <tr>
                                                            <td class="tblCellMain"
                                                                style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                <table class="tblLine" cellspacing="0" cellpadding="0"
                                                                       border="0" width="100%"
                                                                       style="border-top-width: 1px; border-top-style: none; min-width: 1px;">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><span></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="flexible-section" data-columns="1" data-columns-ratio=""
                                            id="section_3">
                                            <td width="100%" class="blk_container bmeHolder bmeBody" name="bmeBody"
                                                valign="top" align="center"
                                                style="background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
                                                <div id="dv_20" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_text">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <table cellpadding="0" cellspacing="0" border="0"
                                                                       width="100%" class="bmeContainerRow">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="tdPart" valign="top" align="center">
                                                                            <table cellspacing="0" cellpadding="0"
                                                                                   border="0" width="600" name="tblText"
                                                                                   class="tblText"
                                                                                   style="float:left; background-color:transparent;"
                                                                                   align="left">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td valign="top" align="left"
                                                                                        name="tblCell" class="tblCell"
                                                                                        style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left; word-break: break-word;">
                                                                                        <div
                                                                                            style="line-height: 100%; text-align: center;">
                                                                                                <span
                                                                                                    style="color: rgb(23, 20, 20); line-height: 100%;"><strong><span
                                                                                                            style="font-size: 47px; line-height: 100%; font-family: Helvetica, Arial, sans-serif;">Informações </span></strong></span>
                                                                                        </div>
                                                                                        <div
                                                                                            style="line-height: 100%; text-align: center;">
                                                                                                <span
                                                                                                    style="color: rgb(23, 20, 20); line-height: 100%;"><strong><span
                                                                                                            style="font-size: 47px; line-height: 100%; font-family: Helvetica, Arial, sans-serif;">Evento</span></strong></span>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="flexible-section" data-columns="3" data-columns-ratio=""
                                            id="section_6" style="">
                                            <td width="100%">
                                                <table class="bmeHolder bmeBody" name="bmeBody" cellspacing="0"
                                                       cellpadding="0" border="0" align="center" width="100%"
                                                       style="background-color: rgb(255, 255, 255);" bgcolor="#ffffff">
                                                    <tbody>
                                                    <tr>
                                                        <td width="100%" valign="top" align="center">
                                                            <div>
                                                                <table class="blk_parent1" cellspacing="0"
                                                                       cellpadding="0" style="max-width: 600px;"
                                                                       width="600" align="center">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th valign="top" align="center" width="50%"
                                                                            class="tdPart">
                                                                            <table cellspacing="0" cellpadding="0"
                                                                                   border="0" width="100%"
                                                                                   class="blk_parent" align="left"
                                                                                   style="float:left;">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td valign="top" align="center"
                                                                                        class="blk_container bmeColumn1"
                                                                                        name="bmeColumn1" style="">
                                                                                        <div id="dv_13"
                                                                                             class="blk_wrapper"
                                                                                             style="">
                                                                                            <table width="200"
                                                                                                   cellspacing="0"
                                                                                                   cellpadding="0"
                                                                                                   border="0"
                                                                                                   class="blk"
                                                                                                   name="blk_image">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <table
                                                                                                            width="100%"
                                                                                                            cellspacing="0"
                                                                                                            cellpadding="0"
                                                                                                            border="0">
                                                                                                            <tbody>
                                                                                                            <tr>
                                                                                                                <td align="center"
                                                                                                                    class="bmeImage"
                                                                                                                    style="border-collapse: collapse;padding-left:20px; padding-right: 20px;padding-top:20px; padding-bottom: 20px; ">
                                                                                                                    <img
                                                                                                                        src="https://images.benchmarkemail.com/client597226/image15406625.png"
                                                                                                                        width="60"
                                                                                                                        style="max-width: 60px; display: block; border-radius: 0px;"
                                                                                                                        alt=""
                                                                                                                        data-radius="0"
                                                                                                                        border="0"
                                                                                                                        data-original-max-width="120"
                                                                                                                        class="keep-custom-width"
                                                                                                                        data-customwidth="50">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div id="dv_16"
                                                                                             class="blk_wrapper"
                                                                                             style="">
                                                                                            <table width="200"
                                                                                                   cellspacing="0"
                                                                                                   cellpadding="0"
                                                                                                   border="0"
                                                                                                   class="blk"
                                                                                                   name="blk_text">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <table
                                                                                                            cellpadding="0"
                                                                                                            cellspacing="0"
                                                                                                            border="0"
                                                                                                            width="100%"
                                                                                                            class="bmeContainerRow">
                                                                                                            <tbody>
                                                                                                            <tr>
                                                                                                                <th class="tdPart"
                                                                                                                    valign="top"
                                                                                                                    align="center">
                                                                                                                    <table
                                                                                                                        cellspacing="0"
                                                                                                                        cellpadding="0"
                                                                                                                        border="0"
                                                                                                                        width="200"
                                                                                                                        name="tblText"
                                                                                                                        class="tblText"
                                                                                                                        style="float:left; background-color:transparent;"
                                                                                                                        align="left">
                                                                                                                        <tbody>
                                                                                                                        <tr>
                                                                                                                            <td valign="top"
                                                                                                                                align="left"
                                                                                                                                name="tblCell"
                                                                                                                                class="tblCell"
                                                                                                                                style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left; word-break: break-word;">
                                                                                                                                <div
                                                                                                                                    style="line-height: 150%; text-align: center;">
                                                                                                                                    <strong><span
                                                                                                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; line-height: 150%;">Data
                                                                                                                                       <br>9 Junho </span></strong>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                        <th valign="top" align="center" width="50%"
                                                                            class="tdPart">
                                                                            <table cellspacing="0" cellpadding="0"
                                                                                   border="0" width="100%"
                                                                                   class="blk_parent" align="left"
                                                                                   style="float:left;">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td valign="top" align="center"
                                                                                        class="blk_container bmeColumn2"
                                                                                        name="bmeColumn2" style="">
                                                                                        <div id="dv_14"
                                                                                             class="blk_wrapper"
                                                                                             style="">
                                                                                            <table width="200"
                                                                                                   cellspacing="0"
                                                                                                   cellpadding="0"
                                                                                                   border="0"
                                                                                                   class="blk"
                                                                                                   name="blk_image">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <table
                                                                                                            width="100%"
                                                                                                            cellspacing="0"
                                                                                                            cellpadding="0"
                                                                                                            border="0">
                                                                                                            <tbody>
                                                                                                            <tr>
                                                                                                                <td align="center"
                                                                                                                    class="bmeImage"
                                                                                                                    style="border-collapse: collapse;padding-left:20px; padding-right: 20px;padding-top:20px; padding-bottom: 20px; ">
                                                                                                                    <img
                                                                                                                        src="https://images.benchmarkemail.com/client597226/image15406645.png"
                                                                                                                        width="60"
                                                                                                                        style="max-width: 60px; display: block; border-radius: 0px;"
                                                                                                                        alt=""
                                                                                                                        data-radius="0"
                                                                                                                        border="0"
                                                                                                                        data-original-max-width="120"
                                                                                                                        class="keep-custom-width"
                                                                                                                        data-customwidth="50">
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div id="dv_17"
                                                                                             class="blk_wrapper"
                                                                                             style="">
                                                                                            <table width="200"
                                                                                                   cellspacing="0"
                                                                                                   cellpadding="0"
                                                                                                   border="0"
                                                                                                   class="blk"
                                                                                                   name="blk_text">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <table
                                                                                                            cellpadding="0"
                                                                                                            cellspacing="0"
                                                                                                            border="0"
                                                                                                            width="100%"
                                                                                                            class="bmeContainerRow">
                                                                                                            <tbody>
                                                                                                            <tr>
                                                                                                                <th class="tdPart"
                                                                                                                    valign="top"
                                                                                                                    align="center">
                                                                                                                    <table
                                                                                                                        cellspacing="0"
                                                                                                                        cellpadding="0"
                                                                                                                        border="0"
                                                                                                                        width="200"
                                                                                                                        name="tblText"
                                                                                                                        class="tblText"
                                                                                                                        style="float:left; background-color:transparent;"
                                                                                                                        align="left">
                                                                                                                        <tbody>
                                                                                                                        <tr>
                                                                                                                            <td valign="top"
                                                                                                                                align="left"
                                                                                                                                name="tblCell"
                                                                                                                                class="tblCell"
                                                                                                                                style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left; word-break: break-word;">
                                                                                                                                <div
                                                                                                                                    style="line-height: 150%; text-align: center;">
                                                                                                                                    <strong><span
                                                                                                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; line-height: 150%;">Horário
                                                                                                                                       <br>17h</span></strong>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </th>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr id="section_4" class="flexible-section" data-columns="1">
                                            <td width="100%" class="blk_container bmeHolder" name="bmePreFooter"
                                                valign="top" align="center" bgcolor="#ffffff"
                                                style="background-color: rgb(255, 255, 255);">
                                                <div id="dv_26" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_divider"
                                                           style="background-color: rgb(255, 255, 255);">
                                                        <tbody>
                                                        <tr>
                                                            <td class="tblCellMain"
                                                                style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                <table class="tblLine" cellspacing="0" cellpadding="0"
                                                                       border="0" width="100%"
                                                                       style="border-top-width: 1px; border-top-style: none; min-width: 1px;">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><span></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="dv_18" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_text">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <table cellpadding="0" cellspacing="0" border="0"
                                                                       width="100%" class="bmeContainerRow">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th class="tdPart" valign="top" align="center">
                                                                            <table cellspacing="0" cellpadding="0"
                                                                                   border="0" width="600" name="tblText"
                                                                                   class="tblText"
                                                                                   style="float:left; background-color:transparent;"
                                                                                   align="left">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td valign="top" align="left"
                                                                                        name="tblCell" class="tblCell"
                                                                                        style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left; word-break: break-word;">
                                                                                        <div
                                                                                            style="line-height: 150%; text-align: center;">
                                                                                                <span
                                                                                                    style="font-size: 16px; line-height: 150%; font-family: Helvetica, Arial, sans-serif;">Obrigado pelo presente, {{$inviteCode->guest_name}}! Sua presença vai fazer nosso chá de cozinha ainda mais especial.&nbsp;</span>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </th>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="dv_21" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_divider"
                                                           style="background-color: rgb(255, 255, 255);">
                                                        <tbody>
                                                        <tr>
                                                            <td class="tblCellMain"
                                                                style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                <table class="tblLine" cellspacing="0" cellpadding="0"
                                                                       border="0" width="100%"
                                                                       style="border-top-width: 1px; border-top-style: none; min-width: 1px;">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><span></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="dv_10" class="blk_wrapper" style="">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                           class="blk" name="blk_divider" style="">
                                                        <tbody>
                                                        <tr>
                                                            <td class="tblCellMain"
                                                                style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                <table class="tblLine" cellspacing="0" cellpadding="0"
                                                                       border="0" width="100%"
                                                                       style="border-top: 1px solid rgb(225, 225, 225); min-width: 1px;">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><span></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr id="section_5" class="flexible-section" data-columns="1" data-section-type="bmeFooter">
                                <td width="100%" class="blk_container bmeHolder" name="bmeFooter" valign="top"
                                    align="center" bgcolor="#ffffff"
                                    style="background-color: rgb(255, 255, 255); color: rgb(102, 102, 102);">
                                    <div id="dv_6" class="blk_wrapper" style="">
                                        <table cellspacing="0" cellpadding="0" border="0" style=""
                                               name="blk_social_follow" width="600" class="blk">
                                            <tbody>
                                            <tr>
                                                <td valign="top" align="left"
                                                    name="tblCell" class="tblCell"
                                                    style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left; word-break: break-word;">
                                                    <div
                                                        style="line-height: 100%; text-align: center;">
                                                            <span
                                                                style="color: rgb(23, 20, 20); line-height: 100%;"><strong><span
                                                                        style="font-size: 47px; line-height: 100%; font-family: Helvetica, Arial, sans-serif;">Presente </span></strong></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="dv_7" class="blk_wrapper" style="">
                                        <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk"
                                               name="blk_permission" style="">
                                            <tbody>
                                            <tr id="section_2" class="flexible-section" data-columns="1">
                                                <td width="100%" class="blk_container bmeHolder" name="bmeFooter"
                                                    valign="top" align="center" bgcolor="#ffefe9"
                                                    style="background-color: rgb(255, 255, 255);">
                                                    <div id="dv_1" class="blk_wrapper" style="">
                                                        <table class="blk" name="blk_image" width="600" border="0"
                                                               cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table width="100%" cellspacing="0" cellpadding="0"
                                                                           border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="bmeImage"
                                                                                style="padding: 0px; border-collapse: collapse;"
                                                                                align="center"><img
                                                                                    src="{{$gift->photo}}"
                                                                                    class="mobile-img-large" width="450"
                                                                                    style="max-width: 1000px; display: block; border-radius: 0px;"
                                                                                    alt="" data-radius="0" border="0">
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="dv_11" class="blk_wrapper" style="">
                                                        <table width="600" cellspacing="0" cellpadding="0" border="0"
                                                               class="blk" name="blk_divider"
                                                               style="background-color: rgb(255, 255, 255);">
                                                            <tbody>
                                                            <tr>
                                                                <td class="tblCellMain"
                                                                    style="padding-top:20px; padding-bottom:20px;padding-left:20px;padding-right:20px;">
                                                                    <table class="tblLine" cellspacing="0"
                                                                           cellpadding="0"
                                                                           border="0" width="100%"
                                                                           style="border-top-width: 1px; border-top-style: none; min-width: 1px;">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><span></span></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>

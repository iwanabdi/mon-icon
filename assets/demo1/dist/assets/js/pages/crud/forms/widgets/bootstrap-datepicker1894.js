var KTBootstrapDatepicker=function(){
    var t;
    t=KTUtil.isRTL()?{
        leftArrow:'<i class="ki-arrow-back"></i>',
        rightArrow:'<i class="ki-arrow-back"></i>'
    }:
    {
        leftArrow:'<i class="ki-arrow-back"></i>',
        rightArrow:'<i class="ki-arrow-back"></i>'
    };
    return{
        init:function(){
            $("#kt_datepicker_1, #kt_datepicker_1_validate").datepicker(
                {
                    rtl:KTUtil.isRTL(),
                    todayHighlight:!0,
                    orientation:"bottom left",
                    templates:t
                }),
                $("#kt_datepicker_1_modal").datepicker(
                    {
                        rtl:KTUtil.isRTL(),todayHighlight:!0,orientation:"bottom left",templates:t
                    }),
                    $("#kt_datepicker_2, #kt_datepicker_2_validate").datepicker(
                        {rtl:KTUtil.isRTL(),todayHighlight:!0,orientation:"bottom left",templates:t
                    }),
                    $("#kt_datepicker_2_modal").datepicker(
                        {rtl:KTUtil.isRTL(),todayHighlight:!0,orientation:"bottom left",templates:t
                    }),
                    $("#kt_datepicker_3, #kt_datepicker_3_validate").datepicker(
                        {rtl:KTUtil.isRTL(),todayBtn:"linked",clearBtn:!0,todayHighlight:!0,templates:t
                    }),
                    $("#kt_datepicker_3_modal").datepicker(
                        {
                            rtl:KTUtil.isRTL(),todayBtn:"linked",clearBtn:!0,todayHighlight:!0,templates:t
                        }),
                        $("#kt_datepicker_4_1").datepicker(
                        {
                            rtl:KTUtil.isRTL(),orientation:"top left",todayHighlight:!0,templates:t
                        }),
                        $("#kt_datepicker_4_2").datepicker(
                        {
                            rtl:KTUtil.isRTL(),orientation:"top right",todayHighlight:!0,templates:t
                        }),
                        $("#kt_datepicker_4_3").datepicker(
                        {
                            rtl:KTUtil.isRTL(),orientation:"bottom left",todayHighlight:!0,templates:t
                        }),
                        $("#kt_datepicker_4_4").datepicker(
                            {
                                rtl:KTUtil.isRTL(),orientation:"bottom right",todayHighlight:!0,templates:t
                            }),
                            $("#kt_datepicker_5").datepicker(
                                {
                                    rtl:KTUtil.isRTL(),todayHighlight:!0,templates:t
                                }),
                                $("#kt_datepicker_6").datepicker(
                                    {
                                        rtl:KTUtil.isRTL(),todayHighlight:!0,templates:t
                                    })
                                }
                            }
                        }();
                        jQuery(document).ready((function(){KTBootstrapDatepicker.init()}));
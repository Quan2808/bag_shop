
const provinces = [{
    "name": "Hà Nội",
    "districts": [
        "Ba Đình",
        "Bắc Từ Liêm",
        "Cầu Giấy",
        "Đống Đa",
        "Hai Bà Trưng",
        "Hà Đông",
        "Hoàn Kiếm",
        "Hoàng Mai",
        "Long Biên",
        "Nam Từ Liêm",
        "Tây Hồ",
        "Thanh Xuân",
    ]
},
{
    "name": "Hồ Chí Minh",
    "districts": [
        "Quận 1",
        "Quận 2",
        "Quận 3",
        "Quận 4",
        "Quận 5",
        "Quận 6",
        "Quận 7",
        "Quận 8",
        "Quận 9",
        "Quận 10",
        "Quận 11",
        "Quận 12",
        "Quận Bình Chánh",
        "Quận Bình Tân",
        "Quận Bình Thạnh",
        "Quận Cần Giờ",
        "Quận Củ Chi",
        "Quận Gò Vấp",
        "Quận Hóc Môn",
        "Quận Nhà Bè",
        "Quận Phú Nhuận",
        "Quận Tân Bình",
        "Quận Tân Phú",
        "Quận Thủ Đức",
    ]
}
];

const provinceSelect = document.getElementById("provinceSelect");
const districtSelect = document.getElementById("districtSelect");

provinces.forEach((province) => {
const option = document.createElement("option");
option.text = province.name;
provinceSelect.add(option);
});

provinceSelect.addEventListener("change", () => {
const selectedProvince = provinceSelect.value;
const districts = provinces.find((province) => province.name === selectedProvince).districts;

districtSelect.innerHTML = '<option selected disabled>Chọn huyện</option>';

districts.forEach((district) => {
    const option = document.createElement("option");
    option.text = district;
    districtSelect.add(option);
});

districtSelect.disabled = false;
});
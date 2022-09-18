// Set a same-site cookie for first-party contexts
document.cookie = "cookie1=value1; SameSite=Lax";
// Set a cross-site cookie for third-party contexts
document.cookie = "cookie2=value2; SameSite=None; Secure";

document.cookie = "promo_shown=1; Max-Age=2600000; Secure"
"promo_shown=1; Max-Age=2600000; Secure"

document.cookie;
"promo_shown=1; color_theme=peachpuff; sidebar_loc=left"
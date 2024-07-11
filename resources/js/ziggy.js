const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"home":{"uri":"\/","methods":["GET","HEAD"]},"articles":{"uri":"articles","methods":["GET","HEAD"]},"article":{"uri":"articles\/{slug}","methods":["GET","HEAD"],"parameters":["slug"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };

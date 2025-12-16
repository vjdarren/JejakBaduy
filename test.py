class WebBrowser:
    def __init__(self):
        self.page_stack = []
        self.history = []

    def visit_page(self, url):
        self.page_stack.append(url)
        self.history.append(url)
        print("Visiting: " + url)

    def go_back(self):
        if not self.page_stack:
            return "No more pages to go back to."
        previous_page = self.page_stack.pop()
        return "Going back to: " + previous_page

    def get_history(self):
        return self.history

# Create a web browser instance
browser = WebBrowser()

# Simulate the user's actions
browser.visit_page("example.com")
browser.visit_page("google.com")
browser.visit_page("stackoverflow.com")

# User clicks the "Back" button
print(browser.go_back())  # Output: Going back to: stackoverflow.com
print(browser.go_back())  # Output: Going back to: google.com
print(browser.go_back())  # Output: Going back to: example.com
print(browser.go_back())  # Output: No more pages to go back to.

# Get the browser's history
print(browser.get_history())  # Output: ['example.com', 'google.com', 'stackoverflow.com']


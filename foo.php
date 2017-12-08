<?php
function foo() {
  if (false) {
    if (true) {
      if (false) {
        if (true) {
          // threshold
          if (false) {
            if (false) {
              // Do something here.
            }
          }
        }
      }
    }
  }
}

function foo() {
  if (false) {
    if (true) {
      if (false) {
        if (true) {
          // threshold
          if (false) {
            if (false) {
              // Do something here.
            }
          }
        }
      }
    }
  }
}

function foo() {
  if (false) {
    if (true) {
      if (false) {
        // if (true) {
          // threshold
        //}
      }
    }
  }
}

function foo() {
  // ignore
  if (false) {
    // Do something here.
  } else if (false) {
    // Do something here.
  } else if (true) {
    // Do something here.
  } else if (false) {
    // Do something here.
  }
}

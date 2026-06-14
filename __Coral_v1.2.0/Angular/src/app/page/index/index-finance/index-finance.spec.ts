import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexFinance } from './index-finance';

describe('IndexFinance', () => {
  let component: IndexFinance;
  let fixture: ComponentFixture<IndexFinance>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexFinance]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexFinance);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
